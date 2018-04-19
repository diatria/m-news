<?php

namespace App\Http\Controllers\FrontPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Model\Berita;
use App\Model\Kategori;
use App\Model\Statistik;
use App\Model\Iklan;

class DisplayDataController extends Controller
{
    public function mamujuHome()
    {
        $iklan = [
            'iklan1' => Iklan::where('position', 'iklan1')->first(),
            'iklan2' => Iklan::where('position', 'iklan2')->first(),
            'iklan3' => Iklan::where('position', 'iklan3')->first(),
            'iklan4' => Iklan::where('position', 'iklan4')->first(),
            'iklan5' => Iklan::where('position', 'iklan5')->first(),
            'iklan6' => Iklan::where('position', 'iklan6')->first(),
            'iklan7' => Iklan::where('position', 'iklan7')->first()
        ];
        $berita_slider = Berita::orderBy('time', 'desc')->where('source_type', 'gambar')->take(4)->get();
        $berita_popular = Berita::orderBy('visitor', 'desc')->where('source_type', 'gambar')->take(5)->get();
        $berita_terbaru_first = Berita::orderBy('time', 'desc')->where('display', 'Yes')->take(5)->get();
        $berita_terbaru_two = Berita::orderBy('time', 'desc')->where('display', 'Yes')->skip(5)->take(5)->get();
    	return view('frontpage.frontpage_index')
    	->with('berita_slider', $berita_slider)
        ->with('berita_popular', $berita_popular)
        ->with('berita_terbaru_first', $berita_terbaru_first)
        ->with('berita_terbaru_second', $berita_terbaru_two)
        ->with('iklan', $iklan);
    }

    public function mamujuViewBerita($kategori, $berita)
    {
    	try {
    		$id_kategori = Kategori::where('nama_kategori', $kategori)->first();
    		// Statistik
	    	$berita = Berita::where('url', $berita)->where('id_kategori', $id_kategori->id)->first();
            $berita_popular = Berita::orderBy('visitor', 'desc')->where('source_type', 'gambar')->take(5)->get();
	    	return view('frontpage.frontpage_view')
	    	->with('kategori', $id_kategori->id)
            ->with('berita_popular', $berita_popular)
	    	->with('berita', $berita);
	    	echo 'aresti';
    	} catch (\Exception $e) {
    		return $e;
    	}
    	
    	
    }
}
