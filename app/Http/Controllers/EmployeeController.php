<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('id', 'desc')->paginate(10);
        return view('employees.employees-index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return view('employees.employee-create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate data
        $request->validate([
            'firstname' => 'required|min:5|max:30',
            'lastname' => 'required|min:5|max:30',
            'email' => 'nullable|email|min:8',
            'phone' => 'nullable|string|max:15',
            'company_id' => 'required|integer',

        ]);

        //create new employee
        $employee = new Employee();
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->company_id = $request->company_id;


        $employee->save();

        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        $company = $employee->company()->first();

        return view('employees.employee-show', compact('employee', 'company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Company::all();
        $employee = Employee::findOrFail($id);
        return view('employees.employee-edit', compact('employee', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        //validate data
        $request->validate([
            'firstname' => 'required|min:5|max:30',
            'lastname' => 'required|min:5|max:30',
            'email' => 'nullable|email|min:8',
            'phone' => 'nullable|string|max:15',
            'company_id' => 'required|integer',
        ]);

        $employee = Employee::findOrFail($id);
        $company = Company::findOrFail($data['company_id']);
        $employee->update($data);
        $employee->company()->associate($company);
        $employee->save();

        return redirect()->route('employee-show', $employee->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect()->route('employees-index');
    }

    public function restorePage()
    {

        $deletedEmployees = DB::table('employees')->whereNotNull('deleted_at')->get();

        return view('employees.employee-restore', compact('deletedEmployees'));
    }

    public function restore(Request $request)
    {
        $data = $request->all();
        $id = $data['name'];
        Employee::where('id', $id)->restore();
        return redirect()->route('employees-index');
    }
}
