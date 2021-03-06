<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('id', 'desc')->paginate(10);
        return view('companies.companies-index', compact('companies'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return view('companies.company-create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|min:5|max:60',
            'email' => 'nullable|email|min:8',
            'logo' => 'nullable|file',
            'website' => 'nullable|string'
        ]);
        
        $company = Company::create([

            'name' => $request->name,
            'email' => $request->email,
            'logo' => $request->logo,
            'website' => $request->website

        ]);        
        
        if ($request->has('logo')) {
            
            $logo = $request->file('logo');
            $ext = $logo->getClientOriginalExtension();
            
            $name = rand(100000, 999999) . '_' . time();
            
            $destFile = $name .  '.' . $ext;
            
            $file = $logo->storeAs('logos', $destFile, 'public');            
            
            $company->logo = $destFile;
            
        } 
        
        $company->save();
                
        return redirect('/companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
        $employees = $company->employees()->get();
        // dd($employees);
        return view('companies.company-show', compact('company', 'employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.company-edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:5|max:60',
            'email' => 'nullable|email|min:8',
            'logo' => 'nullable|file',
            'website' => 'nullable|string'
        ]);

        $company = Company::findOrFail($id);

        // dd($company); 


        DB::table('companies')->where('id', $id)->update([
            
            'name' => $request['name'],
            'email' => $request['email'],
            'logo' => $request['logo'],
            'website' => $request['website']
            
            ]);     
            
            if ($request->has('logo')) {
                
                $fileName = $company->logo;
                $file = storage_path('app/public/logos/' . $fileName);
                File::delete($file);
                
                
                $logo = $request->file('logo');
                $ext = $logo->getClientOriginalExtension();
                
                $name = rand(100000, 999999) . '_' . time();
                
                $destFile = $name . '.' . $ext;
                
                $file = $logo->storeAs('logos', $destFile, 'public');
                
                $company->logo = $destFile;
                
            } 
            
            $company->save();
            
            // dd($company);

        return redirect()->route('company-show', $company->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect()->back();
    }
    public function restore($id)
    {
    }
    public function clearImg($id)
    {
        $company = Company::findOrFail($id);
        $company->logo = null;
        $company->save();
        return back();
    }
}
