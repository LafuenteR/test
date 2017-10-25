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

Route::get('/','AccountController@show');

//RegisterController GET
Route::get('/register','RegisterController@show');

//RegisterController POST
Route::post('/register','RegisterController@register');

//LoginController GET
Route::get('/login','LoginController@show');
Route::get('/home','LoginController@welcomeLogin');
Route::get('/logout','LoginController@logout');

//LoginController POST
Route::post('/login','LoginController@login');


//AccountController GET
Route::get('/edit','AccountController@edit');
Route::get('/wrong',function(){
	return view('homepage.exception');
});
Route::get('/delete','AccountController@deletePage');
Route::get('/edit_user_account','AccountController@editUserAccount');

//AccountCOntroller POST
Route::post('/p_info','AccountController@personInfo');
Route::post('/edit_info','AccountController@editInfo');
Route::post('/delete','AccountController@delete');
Route::post('/edit_user','AccountController@editUser');

