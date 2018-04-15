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
Route::get('kategori', 'Dashboard\KategoriController@viewer');
Route::post('kategori/add', 'Dashboard\KategoriController@add');
Route::get('kategori/destroy/{id}', 'Dashboard\KategoriController@destroy');
Route::get('kategori/change_viewer/{id}', 'Dashboard\KategoriController@change_viewer');
Route::post('kategori/change/{id}', 'Dashboard\KategoriController@change');

// Berita
Route::get('berita', 'Dashboard\BeritaController@viewer');
Route::post('berita/add', 'Dashboard\BeritaController@add');
Route::get('berita/destroy/{id}', 'Dashboard\BeritaController@destroy');
Route::get('berita/change_viewer/{id}', 'Dashboard\BeritaController@change_viewer');
Route::post('berita/change/{id}', 'Dashboard\BeritaController@change');


Route::get('conn', function(){
	try {
    	DB::connection()->getPdo();
	} catch (\Exception $e) {
    	die("Could not connect to the database.  Please check your configuration.");
	}
});