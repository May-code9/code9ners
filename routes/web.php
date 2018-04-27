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
  Route::resource('website', 'WebsiteController');
  Route::resource('websiteTrash', 'WebsiteTrashed');
  Route::resource('siteCategory', 'WebsiteCategoryController');
  Route::resource('siteCategoryTrash', 'WebsiteCategoryTrashed');
  Route::get('/edit Website Image/{id}', ['as'=>'edit.website.image', 'uses'=>'EditImagesController@website']);
  Route::post('/edit Website Image/{id}', ['as'=>'edit.website.image', 'uses'=>'EditImagesController@post_website']);
});
