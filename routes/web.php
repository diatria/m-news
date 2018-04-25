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
Route::get('view/{kategori}', 'FrontPage\DisplayDataController@group');
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

// Infografis
Route::get('db_infografis', 'Dashboard\InfografisController@viewer');
Route::post('db_infografis/add', 'Dashboard\InfografisController@add');
Route::get('db_infografis/destroy/{id}', 'Dashboard\InfografisController@destroy');
Route::get('db_infografis/change_viewer/{id}', 'Dashboard\InfografisController@change_viewer');
Route::post('db_infografis/change/{id}', 'Dashboard\InfografisController@change');

// Foto
Route::get('db_foto', 'Dashboard\FotoController@viewer');
Route::post('db_foto/add', 'Dashboard\FotoController@add');
Route::get('db_foto/destroy/{id}', 'Dashboard\FotoController@destroy');
Route::get('db_foto/change_viewer/{id}', 'Dashboard\FotoController@change_viewer');
Route::post('db_foto/change/{id}', 'Dashboard\FotoController@change');

// Foto
Route::get('db_mamujutv', 'Dashboard\MamujutvController@viewer');
Route::post('db_mamujutv/add', 'Dashboard\MamujutvController@add');
Route::get('db_mamujutv/destroy/{id}', 'Dashboard\MamujutvController@destroy');
Route::get('db_mamujutv/change_viewer/{id}', 'Dashboard\MamujutvController@change_viewer');
Route::post('db_mamujutv/change/{id}', 'Dashboard\MamujutvController@change');

// Menu
Route::get('db_menu', 'Dashboard\MenuController@index');
Route::get('db_menu/change/{id}', 'Dashboard\MenuController@menuSwitch');

Route::get('conn', function(){
	try {
    	DB::connection()->getPdo();
	} catch (\Exception $e) {
    	die("Could not connect to the database.  Please check your configuration.");
	}
});