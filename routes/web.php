<?php
use Illuminate\Http\Request;
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
Route::get('view/all-new', 'FrontPage\DisplayDataController@loadMore');
Route::get('view/{kategori}', 'FrontPage\DisplayDataController@group');
Route::get('view/{kategori}/{berita}', 'FrontPage\DisplayDataController@mamujuViewBerita');

Route::post('komentar/{table}/{id}', 'FrontPage\DisplayDataController@komentar');
Route::get('search', 'FrontPage\DisplayDataController@pencarian');
// Login
Route::get('login', 'Auth\LoginController@viewer');
Route::post('login/verification', 'Auth\LoginController@loginValidator');
Route::get('login/destroy/{id}', 'Auth\LoginController@destroy');
Route::get('login/change_viewer/{id}', 'Auth\LoginController@change_viewer');
Route::post('login/change/{id}', 'Auth\LoginController@change');
ROute::get('login/revoke', 'Auth\LoginController@revoke');
// -- Facebook
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
// Register
Route::get('register', 'Auth\RegisterController@viewer');
Route::post('register/add/{type}', 'Auth\RegisterController@add');
Route::get('register/destroy/{id}', 'Auth\RegisterController@destroy');
Route::get('register/change_viewer/{id}', 'Auth\RegisterController@change_viewer');
Route::post('register/change/{id}', 'Auth\RegisterController@change');

// User Dashboard
Route::group(['middleware' => ['authentication']], function () {
	Route::get('user/dashboard', 'FrontPage\UserDashboardController@viewer');
	Route::post('user/dashboard/change', 'FrontPage\UserDashboardController@change');
});

// Dashboard
// Auth
Route::get('db_login', 'Dashboard\AuthController@viewerLogin');
Route::post('db_login/verification', 'Dashboard\AuthController@loginValidator');
Route::group(['middleware' => ['authenticationAdmin']], function () {
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
	Route::post('db_menu/add', 'Dashboard\MenuController@add');
	Route::get('db_menu/change/{id}', 'Dashboard\MenuController@menuSwitch');

	// Pengguna
	Route::get('db_pengguna/admin', 'Dashboard\PenggunaController@adminViewer');
	Route::get('db_pengguna/user', 'Dashboard\PenggunaController@userViewer');
	Route::get('db_pengguna/add', 'Dashboard\PenggunaController@addViewer');
	Route::post('db_pengguna/add', 'Dashboard\PenggunaController@add');
});

Route::get('500', 'FrontPage\ErrorController@E500');
Route::get('maintenance', 'FrontPage\ErrorController@maintenance');

// Configuration
Route::get('conn', function(){
	try {
    	DB::connection()->getPdo();
	} catch (\Exception $e) {
    	die("Could not connect to the database.  Please check your configuration.");
	}
});
Route::get('/cache-clear', function(){
	Artisan::call('cache:clear');
});
Route::get('/config-clear', function(){
	return Artisan::call('config:clear');
});
Route::get('/view-clear', function(){
	Artisan::call('view:clear');
});
Route::get('/session', function(){
	session(['key' => 'value']);
});
Route::get('/get-session', function(Request $request){
	return parse_url('http://m.mamujutoday.com/view/Politik/waduh-pilkada-mamasa-terancam-ditunda', PHP_URL_PATH);
});
