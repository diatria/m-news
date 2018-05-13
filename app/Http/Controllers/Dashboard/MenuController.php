<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Kategori;
use App\Model\Menu;
use App\Helper\ResponseRedirect;
class MenuController extends Controller
{
	public function index()
	{
        try {
    		$kateogir = Kategori::where('display', 'Yes')->get();
            $menu = Menu::all();
    		return view('dashboard.menu.menu_create')
    		->with('data', $kateogir)
            ->with('menu', $menu);
        } catch (\Exception $e) {
            return redirect()->action('FrontPage\ErrorController@E500');
        }
	}
    public function add(Request $request)
    {
        try {
            Menu::insert($request);
            return ResponseRedirect::go('db_menu', 'Berhasil menyimpan data menu', 'success');
        } catch (\Exception $e) {
            
        }
    }
    public function menuSwitch($id)
    {
    	try {
    		Kategori::as_menu($id);
    		return redirect('db_menu');
    	} catch (\Exception $e) {
    		return redirect()->action('FrontPage\ErrorController@E500');
    	}
    }
}
