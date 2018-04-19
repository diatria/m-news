<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

// Model
use App\Model\Berita;
use App\Model\Kategori;

// Helper
use App\Helper\ResponseRedirect;
class BeritaController extends Controller
{
    public function viewer()
    {
    	$kategori = Kategori::render()->where('display', 'Yes');
    	$berita = Berita::where('display', 'Yes')->get();
    	return view('dashboard.berita.berita_create')
    	->with('data', $berita)
    	->with('kategori', $kategori);
    }

    public function change_viewer($id)
	{
		try {
			$data_berita = Berita::where('display', 'Yes')->get();
			$data_change = Berita::find($id);
			$kategori = Kategori::render()->where('display', 'Yes');
			return view('dashboard.berita.berita_edit')
			->with('data', $data_berita)
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
                $file_store = Storage::disk('public')->put('berita/source', $file);
                $file_name = asset('storage').'/'.$file_store;
            } elseif($file_link != null) {
                $file_name = $file_link;
            } elseif($file_embed != null) {
                $file_name = $file_embed;
            }

    		Berita::insert($request, $file_name);
    		return ResponseRedirect::go('db_berita', 'Berhasil menyimpan data berita', 'success');
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
                $file_store = Storage::disk('public')->put('berita/source', $file);
                $file_name = asset('storage').'/'.$file_store;
            } elseif($file_link != null) {
                $file_name = $file_link;
            } elseif($file_embed != null) {
    			$file_name = $file_embed;
    		} else {
                $file_name = null;
            }

    		Berita::change($request, $id, $file_name);
    		return ResponseRedirect::go('db_berita', 'Berhasil merubah data berita', 'success');
    	} catch (\Exception $e) {
    		return $e;
    	}
    }

    public function destroy($id)
    {
    	try {
    		Berita::destroy($id);
    		return ResponseRedirect::go('db_berita', 'Berhasil menghapus data berita', 'danger');
    	} catch (\Exception $e) {
    		return $e;
    	}
    	
    }
}
