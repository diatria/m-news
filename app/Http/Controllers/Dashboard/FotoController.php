<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

// Model
use App\Model\Foto;
use App\Model\Kategori;

// Helper
use App\Helper\ResponseRedirect;

class FotoController extends Controller
{
    public function viewer()
    {
        try {
        	$kategori = Kategori::render()->where('display', 'Yes');
        	$foto = Foto::where('display', 'Yes')->get();
        	return view('dashboard.foto.foto_create')
        	->with('data', $foto)
        	->with('kategori', $kategori);
        } catch (\Exception $e) {
            return redirect()->action('FrontPage\ErrorController@E500');
        }
    }

    public function change_viewer($id)
	{
		try {
			$data_foto = Foto::where('display', 'Yes')->get();
			$data_change = Foto::find($id);
			$kategori = Kategori::render()->where('display', 'Yes');
			return view('dashboard.foto.foto_edit')
			->with('data', $data_foto)
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
                $file_store = Storage::disk('public')->put('foto/source', $file);
                $file_name = asset('storage').'/'.$file_store;
            } elseif($file_link != null) {
                $file_name = $file_link;
            } elseif($file_embed != null) {
                $file_name = $file_embed;
            }

    		Foto::insert($request, $file_name);
    		return ResponseRedirect::go('db_foto', 'Berhasil menyimpan data foto', 'success');
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
                $file_store = Storage::disk('public')->put('foto/source', $file);
                $file_name = asset('storage').'/'.$file_store;
            } elseif($file_link != null) {
                $file_name = $file_link;
            } elseif($file_embed != null) {
    			$file_name = $file_embed;
    		} else {
                $file_name = null;
            }

    		Foto::change($request, $id, $file_name);
    		return ResponseRedirect::go('db_foto', 'Berhasil merubah data foto', 'success');
    	} catch (\Exception $e) {
    		return redirect()->action('FrontPage\ErrorController@E500');
    	}
    }

    public function destroy($id)
    {
    	try {
    		Foto::destroy($id);
    		return ResponseRedirect::go('db_foto', 'Berhasil menghapus data foto', 'danger');
    	} catch (\Exception $e) {
    		return redirect()->action('FrontPage\ErrorController@E500');
    	}
    	
    }
}
