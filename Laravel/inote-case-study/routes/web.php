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
    return view('welcome');
});

Route::group(['prefix'=>'notes'], function(){
    Route::get('/', 'NoteController@index')->name('notes.index');
    Route::get('/create', 'NoteController@create')->name('notes.create');
    Route::post('/create', 'NoteController@store')->name('notes.store');
    Route::get('/edit/{id}', 'NoteController@edit')->name('notes.edit');
    Route::post('/edit/{id}', 'NoteController@update')->name('notes.update');
    Route::get('/delete/{id}', 'NoteController@destroy')->name('notes.delete');
});

Route::group(['prefix'=>'notes_type'], function() {
    Route::get('/', 'Note_typeController@index')->name('notes_type.index');
    Route::get('/create', 'Note_typeController@create')->name('notes_type.create');
    Route::post('/create', 'Note_typeController@store')->name('notes_type.store');
    Route::get('/edit/{id}', 'Note_typeController@edit')->name('notes_type.edit');
    Route::post('/edit/{id}', 'Note_typeController@update')->name('notes_type.update');
    Route::get('/delete/{id}', 'Note_typeController@destroy')->name('notes_type.delete');
});
