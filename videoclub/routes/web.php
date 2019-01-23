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

Route::get('/', 'HomeController@getHome');

Route::get('/catalog', 'CatalogController@getIndex')->middleware('auth');

Route::get('/catalog/show/{id}', 'CatalogController@getShow')->middleware('auth');

Route::get('/catalog/create', 'CatalogController@getCreate')->middleware('auth');


Route::post('/catalog/create', 'CatalogController@postCreate')->middleware('auth');

Route::get('/catalog/edit/{id}', 'CatalogController@getEdit')->middleware('auth');
Route::put('/catalog/edit/{id}', 'CatalogController@putEdit')->middleware('auth');

// Route::get('/login', function() {
// 	return view('auth.index');
// });

// Route::get('/logout', function() {
// 	return view('logout');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
