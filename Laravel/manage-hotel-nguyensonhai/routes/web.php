<?php

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
    return view('welcome');
});

Route::group(['prefix'=>'employees'], function(){
    Route::get('/', 'EmployeeController@index')->name('employees.index');
    Route::get('/create', 'EmployeeController@create')->name('employees.create');
    Route::post('/create', 'EmployeeController@store')->name('employees.store');
    Route::get('/edit/{id}', 'EmployeeController@edit')->name('employees.edit');
    Route::post('/edit/{id}', 'EmployeeController@update')->name('employees.update');
    Route::get('/delete/{id}', 'EmployeeController@destroy')->name('employees.delete');
    Route::get('/search','EmployeeController@search')->name('employees.search');
});
