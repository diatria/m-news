<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Model\Iklan;

// Helper
use App\Helper\ResponseRedirect;
class IklanController extends Controller
{
    public function viewer()
    {
    	$iklan = Iklan::render();
    	return view('dashboard.iklan.iklan_create')
    	->with('data', $iklan);
    }

    public function change_viewer($id)
	{
		try {
			$iklan = Iklan::render();
			$data_change = Iklan::find($id);
			return view('dashboard.iklan.iklan_edit')
			->with('data', $iklan)
			->with('change', $data_change);
		} catch (\Exception $e) {
			return $e;
		}
	}

    public function add(Request $request)
    {
    	try {
    		$file = $request->file('gambar');
    		$file_store = Storage::disk('public')->put('ads', $file);
            $file_name = asset('storage').'/'.$file_store;
    		Iklan::insert($request, $file_name);
    		return ResponseRedirect::go('db_iklan', 'Berhasil menyimpan data iklan', 'success');
    	} catch (\Exception $e) {
    		return $e;
    	}
    	
    }

    public function change(Request $request, $id)
    {
    	try {
			$file = $request->file('gambar');

			if ($file != null) {
				$file_store = Storage::disk('public')->put('ads', $file);
	            $file_name = asset('storage').'/'.$file_store;	
			} else {
				$file_name = null;
			}
    		Iklan::change($request, $id, $file_name);
    		return ResponseRedirect::go('db_iklan', 'Berhasil merubah data iklan', 'success');
    	} catch (\Exception $e) {
    		return $e;
    	}
    }

    public function destroy($id)
    {
    	try {
    		Iklan::destroy($id);
    		return ResponseRedirect::go('db_iklan', 'Berhasil menghapus data kategori', 'danger');
    	} catch (\Exception $e) {
    		return $e;
    	}
    	
    }
}
