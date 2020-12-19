<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'SiteController@index')->name('home');
Route::get('/konfirmasi', 'SiteController@confirm')->name('konfirmasi');
Route::get('/visi-misi', 'SiteController@visi_misi')->name('visi_misi');
Route::get('/blog/', 'SiteController@blog')->name('blog');
Route::get('/blog/category/{category:category}', 'SiteController@category_blog')->name('category_blog');
Route::get('/blog/{slug:slug}', 'SiteController@single_blog')->name('single_blog');
// Sekbid
Route::get('/sekbid/{slug:slug}', 'SiteController@sekbid_detail')->name('sekbid_detail');
// Eskul
ROute::get('/eskul/{slug:slug}', 'SiteController@eskul_detail')->name('eskul_detail');
// Mail
Route::post('/contact', 'ContactController@sendMail')->name('contact');
// auth
Auth::routes();
// User
// Voting
Route::get('/voting/jumlah', 'VotingController@jumlah')->name('jumlah_voting');
Route::get('/pemiltos/kandidat', 'VotingController@index_guest')->name('voting_guest');
Route::get('/pemiltos/detail/{slug:slug}', 'VotingController@show_guest')->name('voting_detail_guest');

Route::group(['middleware' => ['auth']], function(){
	Route::get('/voting', 'VotingController@index')->name('voting');
	Route::get('/voting/detail/{slug:slug}', 'VotingController@show')->name('voting_detail');
	Route::post('/voting', 'VotingController@pilihan_voting')->name('pilihan_voting');
});


Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){

// Admin
	// Dashboard Admin
	Route::get('/dasboard', 'DashboardController@index')->name('dashboard');
	
	// Dashboard Sekbid
	Route::get('/dasboard/sekbid', 'SekbidController@index')->name('sekbid');
	Route::get('/dasboard/create/sekbid', 'SekbidController@create')->name('create_sekbid');
	Route::post('/dasboard/create/sekbid', 'SekbidController@store')->name('store_sekbid');
	Route::get('/dasboard/sekbid/{slug:slug}', 'SekbidController@show')->name('show_sekbid');
	Route::get('/dasboard/edit/sekbid/{id}', 'SekbidController@edit')->name('edit_sekbid');
	Route::patch('/dasboard/edit/sekbid/{id}', 'SekbidController@update')->name('update_sekbid');
	Route::delete('/dasboard/sekbid/{id}', 'SekbidController@destroy')->name('destroy_sekbid');


	// Dashboard siswa
	Route::get('/dasboard/siswa', 'UserController@index')->name('siswa');
	route::get('/getdatasiswa', 'UserController@get_data_siswa')->name('ajax_get_data_siswa');
	Route::post('/dasboard/siswa/import', 'UserController@import')->name('siswa.import');
	Route::delete('/dasboard/siswa/{id}', 'UserController@destroy')->name('destroy_user');
	
	// Siswa Sudah memilih
	Route::get('/dasboard/siswa/sudah_memilih', 'UserController@sudah_memilih')->name('siswa_sudah_memilih');
	route::get('/getdatasiswasudahmemilih', 'UserController@get_data_siswa_sudah_memilih')->name('ajax_get_data_siswa_sudah_memilih');
	Route::delete('/dasboard/siswa/sudah_memilih/{id}', 'UserController@destroy_memilih')->name('destroy_user_memilih');


	//  Dashboard Kandidat Calon
	Route::get('/dasboard/kandidat', 'KandidatController@index')->name('kandidat');
	Route::get('/dasboard/create/kandidat', 'KandidatController@create')->name('create_kandidat');
	Route::post('/dasboard/create/kandidat', 'KandidatController@store')->name('store_kandidat');
	Route::get('/dasboard/kandidat/{id}', 'KandidatController@show')->name('show_kandidat');
	Route::get('/dasboard/edit/kandidat/{id}', 'KandidatController@edit')->name('edit_kandidat');
	Route::patch('/dasboard/edit/kandidat/{id}', 'KandidatController@update')->name('update_kandidat');
	Route::delete('/dasboard/kandidat/{id}', 'KandidatController@destroy')->name('destroy_kandidat');
	
	// Dashboard Waktu Voting
	Route::get('/dasboard/waktu', 'TanggalVotingController@index')->name('tanggal_voting');
	Route::post('dasboard/create/tanggal_voting', 'TanggalVotingController@store')->name('store_tanggal');
	Route::delete('/dasboard/tanggal_voting/{id}', 'TanggalVotingController@destroy')->name('destroy_tanggal');

	// Dashboard Blog
	Route::get('/dasboard/blog', 'BlogController@index')->name('dashboard_blog');
	Route::get('/dasboard/blog/create', 'BlogController@create')->name('create_blog');
	Route::post('/dasboard/blog/create', 'BlogController@store')->name('store_blog');
	Route::get('/dasboard/blog/show/{slug:slug}', 'BlogController@show')->name('show_blog');
	Route::get('/dasboard/blog/{id}', 'BlogController@edit')->name('edit_blog');
	Route::patch('/dasboard/blog/{id}', 'BlogController@update')->name('update_blog');
	Route::delete('/dasboard/blog/{id}', 'BlogController@destroy')->name('destroy_blog');

	// Dashboard Eskul
	Route::get('/dasboard/eskul', 'EskulController@index')->name('eskul');
	Route::get('/dasboard/eskul/create', 'EskulController@create')->name('create_eskul');
	Route::post('/dasboard/eskul/create', 'EskulController@store')->name('store_eskul');
	Route::get('/dasboard/eskul/show/{slug:slug}', 'EskulController@show')->name('show_eskul');
	Route::get('/dasboard/eskul/{id}', 'EskulController@edit')->name('edit_eskul');
	Route::patch('/dasboard/eskul/{id}', 'EskulController@update')->name('update_eskul');
	Route::delete('/dasboard/eskul/{id}', 'EskulController@destroy')->name('destroy_eskul');



});




