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
    return view('Home');
});

/*---------- Company Route ----------*/
Route::get('/Company/Home','CompanyController@index')->name('company.index');
Route::get('/company/create', 'CompanyController@create')->name('company.create');
Route::post('/company','CompanyController@store')->name('company.store');
Route::post('/company/delete/{id}', 'CompanyController@destroy')->name('company.destroy');
Route::get('/company/edit/{id}', 'CompanyController@edit')->name('company.edit');
Route::post('/company/update/{id}', 'CompanyController@update')->name('company.update');

/*---------- PIC Route ----------*/
Route::get('/PIC/Home','PicController@index')->name('PIC.index');
Route::get('/PIC/create', 'PicController@create')->name('PIC.create');
Route::post('/PIC','PicController@store')->name('PIC.store');
Route::post('/PIC/delete/{id}', 'PicController@destroy')->name('PIC.destroy');
Route::get('/PIC/edit/{id}', 'PicController@edit')->name('PIC.edit');
Route::post('/PIC/update/{id}', 'PicController@update')->name('PIC.update');