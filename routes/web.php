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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', ['as'=>'public_home', 'uses'=>'PublicController@index']);

Route::group(['middleware'=>'superadmin'], function() {
  Route::get('/dashboard', ['as'=>'private.dashboard', 'uses'=>'DashboardController@index']);
});
