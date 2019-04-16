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

Route::get('/', 'PagesController@index')->name('/');

Route::get('/services', 'PagesController@services')->name('/services');

Route::get('/welcome', function(){
	return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/media', 'MediacentersController@index')->name('media');

Route::get('/media-create', 'MediacentersController@create')->name('media-create');
Route::get('/media-show/{id?}', 'MediacentersController@show')->name('media-show');
Route::post('/media-save', 'MediacentersController@store')->name('media-save');

Route::post('/media-update/{id?}', 'MediacentersController@update')->name('media-update');
