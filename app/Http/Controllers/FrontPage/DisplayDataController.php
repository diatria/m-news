<?php

namespace App\Http\Controllers\FrontPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Model\Berita;
use App\Model\Kategori;
use App\Model\Statistik;

class DisplayDataController extends Controller
{
    public function mamujuHome()
    {
    	$berita_slider = Berita::orderBy('visitor', 'desc')->where('source_type', '!=', 'embed')->take(5)->get();
        $berita_popular = Berita::orderBy('visitor', 'desc')->take(5)->get();
        $berita_terbaru = Berita::orderBy('time', 'desc')->where('display', 'Yes')->get();
    	return view('frontpage.frontpage_index')
    	->with('berita_slider', $berita_slider)
        ->with('berita_popular', $berita_popular)
        ->with('berita_terbaru', $berita_terbaru);
        // return $berita_terbaru;
    }

    public function mamujuViewBerita($kategori, $berita)
    {
    	try {
    		$id_kategori = Kategori::where('nama_kategori', $kategori)->first();
    		// Statistik
	    	$berita = Berita::where('url', $berita)->where('id_kategori', $id_kategori->id)->first();
	    	return view('frontpage.frontpage_view')
	    	->with('kategori', $id_kategori->id)
	    	->with('berita', $berita);
	    	echo 'aresti';
    	} catch (\Exception $e) {
    		return $e;
    	}
    	
    	
    }
}
