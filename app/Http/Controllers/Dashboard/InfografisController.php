<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

// Model
use App\Model\Infografis;
use App\Model\Kategori;

// Helper
use App\Helper\ResponseRedirect;

class InfografisController extends Controller
{
    public function viewer()
    {
    	$kategori = Kategori::render()->where('display', 'Yes');
    	$infografis = Infografis::where('display', 'Yes')->get();
    	return view('dashboard.infografis.infografis_create')
    	->with('data', $infografis)
    	->with('kategori', $kategori);
    }

    public function change_viewer($id)
	{
		try {
			$data_infografis = Infografis::where('display', 'Yes')->get();
			$data_change = Infografis::find($id);
			$kategori = Kategori::render()->where('display', 'Yes');
			return view('dashboard.infografis.infografis_edit')
			->with('data', $data_infografis)
			->with('change', $data_change)
			->with('kategori', $kategori);
		} catch (\Exception $e) {
			return $e;
		}
	}

    public function add(Request $request)
    {
    	try {
    		$file = $request->file('source');
            $file_link = $request->input('source_link');
            $file_embed = $request->input('source_embed');
            if ($file != null) {
                $file_store = Storage::disk('public')->put('infografis/source', $file);
                $file_name = asset('storage').'/'.$file_store;
            } elseif($file_link != null) {
                $file_name = $file_link;
            } elseif($file_embed != null) {
                $file_name = $file_embed;
            }

    		Infografis::insert($request, $file_name);
    		return ResponseRedirect::go('db_infografis', 'Berhasil menyimpan data infografis', 'success');
    	} catch (\Exception $e) {
    		return $e;
    	}
    	
    }

    public function change(Request $request, $id)
    {
    	try {
    		$file = $request->file('source');
            $file_link = $request->input('source_link');
            $file_embed = $request->input('source_embed');
            if ($file != null) {
                $file_store = Storage::disk('public')->put('infografis/source', $file);
                $file_name = asset('storage').'/'.$file_store;
            } elseif($file_link != null) {
                $file_name = $file_link;
            } elseif($file_embed != null) {
    			$file_name = $file_embed;
    		} else {
                $file_name = null;
            }

    		Infografis::change($request, $id, $file_name);
    		return ResponseRedirect::go('db_infografis', 'Berhasil merubah data infografis', 'success');
    	} catch (\Exception $e) {
    		return $e;
    	}
    }

    public function destroy($id)
    {
    	try {
    		Infografis::destroy($id);
    		return ResponseRedirect::go('db_infografis', 'Berhasil menghapus data infografis', 'danger');
    	} catch (\Exception $e) {
    		return $e;
    	}
    	
    }
}
