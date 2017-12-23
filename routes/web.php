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
Route::get('/showletter/{id}','write@showletter');
Route::get('course','courseController@show');
Route::get('deleteletter/{id}','write@deleteletter');
Route::get('schedule','scheduleController@show');
Route::get('schedule/addwork','scheduleController@addwork');
Route::post('schedule','scheduleController@insertwork');
Route::get('schedule/{id}','scheduleController@complete');
Route::get('articlelist/{id?}','articlecontroller@show');
Route::get('articledetail/{id}','articlecontroller@articledetail');
Route::get('addarticle',function()
{
	return view('addarticle');
});
Route::post('addarticle','articlecontroller@addarticle');
Route::get('myarticle/{id?}','articlecontroller@myarticle');
Route::get('updatearticle/{id}','articlecontroller@updateview');
Route::post('updatearticle','articlecontroller@update');
Route::get('deletearticle/{id}','articlecontroller@deletearticle');
Route::get('quit','quitcontroller@quit');

Route::get("adminlogin",'admincontroller@loginshow');
Route::post('adminlogin','admincontroller@login');
Route::get("courseplan",'admincontroller@courseplan');
Route::get("coursedelete/{id}",'admincontroller@deletecourse');
Route::get('addcourse','admincontroller@showaddcourse');
Route::post('addcourse','admincontroller@addcourse')->middleware('course');
Route::get('adderror','admincontroller@showerror');
Route::get('manageteacher','admincontroller@managetcr');
Route::get("deleteteacher/{id}",'admincontroller@deleteteacher');
Route::get('department','admincontroller@depmanage');
Route::get('add_department',function()
{
	return view('adddep');

	});
Route::post('add_department','admincontroller@add_department');
Route::get('delete_dep/{id}','admincontroller@delete_dep');
Route::get('managearticle/{id?}','admincontroller@managearticle');
Route::get('adeletearticle/{id}','admincontroller@deletearticle');
Route::get('classsets','admincontroller@classsets');
Route::get('addclass',function()
{
	return view('addclass');
});
Route::post('addclass','admincontroller@addclass');
Route::get('deletecladd/{id}','admincontroller@deleteclass');