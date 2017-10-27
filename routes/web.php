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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('adminis')->middleware('role:superadministrator|administrator|autor|editor')->group(function(){
	Route::get('/','AdminisController@home')->name('adminis');
	Route::get('/adminpanel','AdminisController@adminpanel')->name('adminis.adminpanel');
	Route::resource('/users', 'UserController');
});
