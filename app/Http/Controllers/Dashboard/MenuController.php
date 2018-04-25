<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Kategori;
class MenuController extends Controller
{
	public function index()
	{
		$data = Kategori::where('display', 'Yes')->get();
		return view('dashboard.menu.menu_layout')
		->with('data', $data);
	}
    public function menuSwitch($id)
    {
    	try {
    		Kategori::as_menu($id);
    		return redirect('db_menu');
    	} catch (\Exception $e) {
    		
    	}
    }
}
