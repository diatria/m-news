<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Model\Kategori;

// Helper
use App\Helper\ResponseRedirect;
class KategoriController extends Controller
{
	public function viewer(Request $request)
	{
		try {
			$data_kategori = Kategori::where('display', 'Yes')->get();
			if ($request['render'] != 'json') {
				return view('dashboard.kategori.kategori_create')
				->with('data', $data_kategori);
			} else {
				$data = [
					'data_kategori' => $data_kategori
				];
				return $data;
			}
			
		} catch (\Exception $e) {
			return redirect()->action('FrontPage\ErrorController@E500');
		}
		
	}

	public function change_viewer($id)
	{
		try {
			$data_kategori = kategori::where('display', 'Yes')->get();
			$data_change = Kategori::find($id);
			return view('dashboard.kategori.kategori_edit')
			->with('data', $data_kategori)
			->with('change', $data_change);
		} catch (\Exception $e) {
			return redirect()->action('FrontPage\ErrorController@E500');
		}
	}

    public function add(Request $request)
    {
    	try {
    		kategori::insert($request);
    		return ResponseRedirect::go('db_kategori', 'Berhasil menyimpan data kategori', 'success');
    	} catch (\Exception $e) {
    		return redirect()->action('FrontPage\ErrorController@E500');
    	}
    	
    }

    public function change(Request $request, $id)
    {
    	try {
    		kategori::change($request, $id);
    		return ResponseRedirect::go('db_kategori', 'Berhasil merubah data kategori', 'success');
    	} catch (\Exception $e) {
    		return redirect()->action('FrontPage\ErrorController@E500');
    	}
    }

    public function destroy($id)
    {
    	try {
    		kategori::destroy($id);
    		return ResponseRedirect::go('db_kategori', 'Berhasil menghapus data kategori', 'danger');
    	} catch (\Exception $e) {
    		return redirect()->action('FrontPage\ErrorController@E500');
    	}
    	
    }

}
