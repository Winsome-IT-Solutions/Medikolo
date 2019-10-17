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
    return view('index');
});
Route::get('about','AboutController@index');
//---Admin routes
Route::namespace('Admin\Auth')->prefix('masters')->group(function(){

    Route::get('login','LoginController@index');
    Route::get('register','RegisterController@index');
    //Route::get('masterslist', 'MasterController@index');
    //Route::get('mastersinfo/{masterId}', 'MasterController@masterInfo');
  });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');