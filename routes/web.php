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
Route::get('login','loginController@show');
Route::post('login','loginController@parse');
Route::get('register','registerController@show');
Route::post('register','registerController@parse');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/writeletter','write@show');
Route::post('/writeletter','write@parse');
Route::get('/acceptletter','write@acceptletter');
Route::get('/sendletter','write@sendletter');