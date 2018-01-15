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

Route::get('login',function()
{
	return redirect()->route('home')->with(array('msg'=>'Silahkan masuk atau daftar untuk mendownload konten','title'=>'Authorization Failed'));
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('/lokomotif/{lokomotif}', 'HomeController@lokomotif')->name('lokomotif');
Route::get('/lokomotif/{lokomotif}/{id}', 'HomeController@lokomotif_detail')->name('lokomotif_detail');
Route::get('/kereta/{kereta}', 'HomeController@kereta')->name('kereta');
Route::get('/kereta/{kereta}/{id}', 'HomeController@kereta_detail')->name('kereta_detail');
Route::get('/gerbong/{gerbong}', 'HomeController@gerbong')->name('gerbong');
Route::get('/gerbong/{gerbong}/{id}', 'HomeController@gerbong_detail')->name('gerbong_detail');
Route::get('/rute/{status}', 'HomeController@rute')->name('rute');
Route::get('/rute/{status}/{id}', 'HomeController@rute_detail')->name('rute_detail');
Route::get('/objek/{status}', 'HomeController@objek')->name('objek');
Route::get('/objek/{status}/{id}', 'HomeController@objek_detail')->name('objek_detail');

Route::post('/user/login','HomeController@login');
Route::get('/user/logout','HomeController@logout');
Route::post('/user/request','HomeController@request');
Route::get('/member','HomeController@member')->name('member');
Route::get('/premium_member/{id}','MemberController@premium_member')->name('premium_member');
Route::get('/kirim_konten/{id_user}/{id_konten}/{type}','MemberController@kirim_konten')->name('kirim_konten');
Route::get('/kirim_konten_member/{id_user}/{id_konten}/{type}','MemberController@kirim_konten_member')->name('kirim_konten_member');
Route::get('/link_dep_konten/{id}','MemberController@link_dep_konten')->name('link_dep_konten');
Route::get('/link_user_content/{id}','MemberController@link_user_content')->name('link_user_content');
Route::get('/link_content/{type}/{id}','HomeController@link_content')->name('link_content');
Route::get('/link_user_objek/{id}','HomeController@link_user_objek')->name('link_user_objek');

Route::get('/anonymousx','HomeController@dashboard')->name('dashboard');
Route::get('/verification/email/{id}','HomeController@verification_email')->name('verification_email');
Route::get('/approve/{id}','HomeController@approve_request')->name('approve_request');
Route::get('/delete/{id}','HomeController@delete_request')->name('delete_request');
Route::get('/delete_train/{id}','MemberController@delete_train')->name('delete_train');
Route::get('/add_train','MemberController@add_train')->name('add_train');
Route::post('/save_train','MemberController@save_train')->name('save_train');
Route::get('/delete_rute/{id}','MemberController@delete_rute')->name('delete_rute');
Route::get('/add_rute','MemberController@add_rute')->name('add_rute');
Route::post('/save_rute','MemberController@save_rute')->name('save_rute');
Route::get('/delete_objek/{id}','MemberController@delete_objek')->name('delete_objek');
Route::get('/add_objek','MemberController@add_objek')->name('add_objek');
Route::post('/save_objek','MemberController@save_objek')->name('save_objek');
Route::get('/delete_depcontent/{id}','MemberController@delete_depcontent')->name('delete_depcontent');
Route::get('/add_depcontent','MemberController@add_depcontent')->name('add_depcontent');
Route::post('/save_depcontent','MemberController@save_depcontent')->name('save_depcontent');
Route::get('/delete_usercontent/{id}','MemberController@delete_usercontent')->name('delete_usercontent');
Route::get('/add_usercontent','MemberController@add_usercontent')->name('add_usercontent');
Route::post('/save_usercontent','MemberController@save_usercontent')->name('save_usercontent');

Route::get('/loginid/{id}',function($id)
{
    Auth::loginUsingId($id, true);
    \Session::put('user_id',$id);
});