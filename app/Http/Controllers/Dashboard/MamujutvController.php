<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

// Model
use App\Model\Mamujutv;
use App\Model\Kategori;

// Helper
use App\Helper\ResponseRedirect;

class MamujutvController extends Controller
{
    public function viewer()
    {
        try {
        	$kategori = Kategori::render()->where('display', 'Yes');
        	$mamujutv = Mamujutv::where('display', 'Yes')->get();
        	return view('dashboard.mamujutv.mamujutv_create')
        	->with('data', $mamujutv)
        	->with('kategori', $kategori);
        } catch (\Exception $e) {
            return redirect()->action('FrontPage\ErrorController@E500');
        }
    }

    public function change_viewer($id)
	{
		try {
			$data_mamujutv = Mamujutv::where('display', 'Yes')->get();
			$data_change = Mamujutv::find($id);
			$kategori = Kategori::render()->where('display', 'Yes');
			return view('dashboard.mamujutv.mamujutv_edit')
			->with('data', $data_mamujutv)
			->with('change', $data_change)
			->with('kategori', $kategori);
		} catch (\Exception $e) {
			return redirect()->action('FrontPage\ErrorController@E500');
		}
	}

    public function add(Request $request)
    {
    	try {
    		$file = $request->file('source');
            $file_link = $request->input('source_link');
            $file_embed = $request->input('source_embed');
            if ($file != null) {
                $file_store = Storage::disk('public')->put('mamujutv/source', $file);
                $file_name = asset('storage').'/'.$file_store;
            } elseif($file_link != null) {
                $file_name = $file_link;
            } elseif($file_embed != null) {
                $file_name = $file_embed;
            }

    		Mamujutv::insert($request, $file_name);
    		return ResponseRedirect::go('db_mamujutv', 'Berhasil menyimpan data mamujutv', 'success');
    	} catch (\Exception $e) {
    		return redirect()->action('FrontPage\ErrorController@E500');
    	}
    	
    }

    public function change(Request $request, $id)
    {
    	try {
    		$file = $request->file('source');
            $file_link = $request->input('source_link');
            $file_embed = $request->input('source_embed');
            if ($file != null) {
                $file_store = Storage::disk('public')->put('mamujutv/source', $file);
                $file_name = asset('storage').'/'.$file_store;
            } elseif($file_link != null) {
                $file_name = $file_link;
            } elseif($file_embed != null) {
    			$file_name = $file_embed;
    		} else {
                $file_name = null;
            }

    		Mamujutv::change($request, $id, $file_name);
    		return ResponseRedirect::go('db_mamujutv', 'Berhasil merubah data mamujutv', 'success');
    	} catch (\Exception $e) {
    		return redirect()->action('FrontPage\ErrorController@E500');
    	}
    }

    public function destroy($id)
    {
    	try {
    		Mamujutv::destroy($id);
    		return ResponseRedirect::go('db_mamujutv', 'Berhasil menghapus data mamujutv', 'danger');
    	} catch (\Exception $e) {
    		return redirect()->action('FrontPage\ErrorController@E500');
    	}
    	
    }
}
