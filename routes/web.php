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

Route::get('/industries', 'PagesController@industries')->name('/industries');

Route::get('/careers', 'PagesController@careers')->name('/careers');

// Route::get('/welcome', function(){
// 	return view('welcome');
// });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/media', 'MediacentersController@index')->name('media');

Route::get('/media-create', 'MediacentersController@create')->name('media-create');
Route::get('/media-show/{id?}', 'MediacentersController@show')->name('media-show');
Route::post('/media-save', 'MediacentersController@store')->name('media-save');

Route::post('/media-update/{id?}', 'MediacentersController@update')->name('media-update');

Route::any('/media-delete/{id?}', 'MediacentersController@destroy')->name('media-delete');

Route::get('/partner', 'PartnerController@index')->name('partner');

Route::get('/partner-create', 'PartnerController@create')->name('partner-create');

Route::get('/partner-show/{id?}', 'PartnerController@show')->name('partner-show');

Route::post('/partner-save', 'PartnerController@store')->name('partner-save');

Route::post('/partner-update/{id?}', 'PartnerController@update')->name('partner-update');

Route::any('/partner-delete/{id?}', 'PartnerController@destroy')->name('partner-delete');

Route::get('/team', 'TeamController@index')->name('team');

Route::get('/team-create', 'TeamController@create')->name('team-create');

Route::get('/team-show/{id?}', 'TeamController@show')->name('team-show');

Route::post('/team-save', 'TeamController@store')->name('team-save');

Route::post('/team-update/{id?}', 'TeamController@update')->name('team-update');

Route::any('/team-delete/{id?}', 'TeamController@destroy')->name('team-delete');

Route::get('/medias', 'PagesController@medias')->name('medias');


