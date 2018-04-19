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
// FrontPage
Route::get('/', 'FrontPage\DisplayDataController@mamujuHome');
// Route::get('view/{kategori}', 'FrontPage\DisplayDataController@mamujuView');
Route::get('view/{kategori}/{berita}', 'FrontPage\DisplayDataController@mamujuViewBerita');
// Dashboard
Route::get('dashboard', 'Dashboard\DashboardController@viewer');


// Kategori
Route::get('db_kategori', 'Dashboard\KategoriController@viewer');
Route::post('db_kategori/add', 'Dashboard\KategoriController@add');
Route::get('db_kategori/destroy/{id}', 'Dashboard\KategoriController@destroy');
Route::get('db_kategori/change_viewer/{id}', 'Dashboard\KategoriController@change_viewer');
Route::post('db_kategori/change/{id}', 'Dashboard\KategoriController@change');

// Berita
Route::get('db_berita', 'Dashboard\BeritaController@viewer');
Route::post('db_berita/add', 'Dashboard\BeritaController@add');
Route::get('db_berita/destroy/{id}', 'Dashboard\BeritaController@destroy');
Route::get('db_berita/change_viewer/{id}', 'Dashboard\BeritaController@change_viewer');
Route::post('db_berita/change/{id}', 'Dashboard\BeritaController@change');

// Iklan
Route::get('db_iklan', 'Dashboard\IklanController@viewer');
Route::post('db_iklan/add', 'Dashboard\IklanController@add');
Route::get('db_iklan/destroy/{id}', 'Dashboard\IklanController@destroy');
Route::get('db_iklan/change_viewer/{id}', 'Dashboard\IklanController@change_viewer');
Route::post('db_iklan/change/{id}', 'Dashboard\IklanController@change');

Route::get('conn', function(){
	try {
    	DB::connection()->getPdo();
	} catch (\Exception $e) {
    	die("Could not connect to the database.  Please check your configuration.");
	}
});