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


Route::get('/','CarsController@index');
Route::get('cars/create','CarsController@create');
Route::post('/cars/create','CarsController@store');

Route::get('car/{id}','CarsController@show');
Route::get('/car/{id}/edit','CarsController@edit');
Route::post('/car/{id}/edit','CarsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cars/request','RequestsController@index');
