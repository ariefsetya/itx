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

Route::get('/', 'HomeController@index');
Route::get('/lokomotif/{lokomotif}', 'HomeController@lokomotif')->name('lokomotif');
Route::get('/lokomotif/{lokomotif}/{id}/{seri}', 'HomeController@lokomotif_detail')->name('lokomotif_detail');
Route::get('/kereta/{kereta}', 'HomeController@kereta')->name('kereta');
Route::get('/kereta/{kereta}/{id}/{seri}', 'HomeController@kereta_detail')->name('kereta_detail');
Route::get('/gerbong/{gerbong}', 'HomeController@gerbong')->name('gerbong');
Route::get('/gerbong/{gerbong}/{id}/{seri}', 'HomeController@gerbong_detail')->name('gerbong_detail');
Route::get('/rute/{status}', 'HomeController@rute')->name('rute');
Route::get('/rute/{status}/{id}', 'HomeController@rute_detail')->name('rute_detail');
Route::get('/objek/{status}', 'HomeController@objek')->name('objek');
Route::get('/objek/{status}/{id}', 'HomeController@objek_detail')->name('objek_detail');

Route::post('/user/login','HomeController@login');