<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('micro-admin-panel');
});
Auth::routes();

//companies routes
Route::get('/companies', 'CompanyController@index')->name('companies-index');
Route::get('/company/create', 'CompanyController@create')->name('company-create');
Route::post('/company/create', 'CompanyController@store')->name('company-store');
Route::get('/companies/${id}', 'CompanyController@show')->name('company-show');
Route::get('company/edit/${id}', 'CompanyController@edit')->name('company-edit');
Route::get('company/update/${id}', 'CompanyController@update')->name('company-update');



//employees routes
Route::get('/employees', 'EmployeeController@index')->name('employees-index');
Route::get('/employee/create', 'EmployeeController@create')->name('employee-create');
Route::post('/employee/create', 'EmployeeController@store')->name('employee-store');
Route::get('/employee/${id}', 'EmployeeController@show')->name('employee-show');
Route::get('employee/edit/${id}', 'EmployeeController@edit')->name('employee-edit');
Route::get('employee/update/${id}', 'EmployeeController@update')->name('employee-update');


Route::get('/home', 'HomeController@index')->name('home');
