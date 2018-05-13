<?php

namespace App\Http\Controllers\FrontPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Jenssegers\Agent\Agent;
use Auth;

// Model
use App\Model\Berita;
use App\Model\Kategori;
use App\Model\Statistik;
use App\Model\Iklan;
use App\Model\Infografis;
use App\Model\Foto;
use App\Model\Mamujutv;
use App\Model\Komentar;

// Helper
use App\Helper\Pagination;

class DisplayDataController extends Controller
{
    function __construct(){
        $this->domain_mobile = 'http://m.mamujutoday.com';
    }

    public function mamujuHome()
    {

        try {
            $agent = new Agent();

            $iklan = [
                'iklan1' => Iklan::where('position', 'iklan1')->first(),
                'iklan2' => Iklan::where('position', 'iklan2')->first(),
                'iklan3' => Iklan::where('position', 'iklan3')->first(),
                'iklan4' => Iklan::where('position', 'iklan4')->first(),
                'iklan5' => Iklan::where('position', 'iklan5')->first(),
                'iklan6' => Iklan::where('position', 'iklan6')->first(),
                'iklan7' => Iklan::where('position', 'iklan7')->first()
            ];
            $berita_slider = Berita::orderBy('time', 'desc')->where('display', 'Yes')->where('source_type', 'gambar')->take(4)->get();
            $berita_popular = Berita::orderBy('visitor', 'desc')->where('display', 'Yes')->where('source_type', 'gambar')->take(5)->get();
            $berita_terbaru_first = Berita::orderBy('time', 'desc')->where('display', 'Yes')->take(5)->get();
            $berita_terbaru_two = Berita::orderBy('time', 'desc')->where('display', 'Yes')->skip(5)->take(5)->get();
            $infografis_small = Infografis::orderBy('time', 'desc')->where('display', 'yes')->skip(1)->take(3)->get();
            $infografis_big = Infografis::orderBy('time', 'desc')->where('display', 'yes')->take(1)->first();
            $foto = Foto::orderBy('time', 'desc')->where('display', 'yes')->take(5)->get();
            $mamujutv = Mamujutv::orderBy('time', 'desc')->where('display', 'yes')->take(5)->get();
            $menu = Kategori::where('display', 'Yes')->where('as_menu', 'true')->get();

            // Mobile
            $m_berita_single = Berita::orderBy('time', 'desc')->where('display', 'Yes')->first();
            $m_berita_terbaru_top = Berita::orderBy('time', 'desc')->where('display', 'Yes')->skip(1)->take(4)->get();
            $m_berita_terbaru_after = Berita::orderBy('time', 'desc')->where('display', 'Yes')->skip(5)->take(5)->get();
            $infografis = Infografis::orderBy('time', 'desc')->where('display', 'yes')->take(5)->get();
            // return $infografis_big;
            if ($agent->isMobile()) {
                $sub_domain = explode('.', $_SERVER['HTTP_HOST'])[0];
                if ($sub_domain == 'm') {
                    $page = 'm_frontpage.m_frontpage_index';
                } else {
                    return redirect($this->domain_mobile);
                }
            } else {
                $page = 'frontpage.frontpage_index';
            }
            return view($page)
            ->with('berita_slider', $berita_slider)
            ->with('berita_popular', $berita_popular)
            ->with('berita_terbaru_first', $berita_terbaru_first)
            ->with('berita_terbaru_second', $berita_terbaru_two)
            ->with('infografis_small', $infografis_small)
            ->with('infografis_big', $infografis_big)
            ->with('foto', $foto)
            ->with('mamujutv', $mamujutv)
            ->with('iklan', $iklan)
            ->with('menu', $menu)
            ->with('m_berita_single', $m_berita_single)
            ->with('m_berita_terbaru_top', $m_berita_terbaru_top)
            ->with('m_berita_terbaru_after', $m_berita_terbaru_after)
            ->with('infografis', $infografis);
        } catch (\Exception $e) {
            return redirect()->action('FrontPage\ErrorController@E500');
        }
        
    }

    public function mamujuViewBerita($kategori, $berita)
    {
    	// try {
            $agent = new Agent();
            $iklan = [
                'iklan1' => Iklan::where('position', 'iklan1')->first(),
                'iklan2' => Iklan::where('position', 'iklan2')->first(),
                'iklan3' => Iklan::where('position', 'iklan3')->first(),
                'iklan4' => Iklan::where('position', 'iklan4')->first(),
                'iklan5' => Iklan::where('position', 'iklan5')->first(),
                'iklan6' => Iklan::where('position', 'iklan6')->first(),
                'iklan7' => Iklan::where('position', 'iklan7')->first()
            ];
    		$id_kategori = Kategori::where('nama_kategori', $kategori)->where('display', 'Yes')->first();

            // Get Table
            $q_berita = DB::table('berita')->where('url', '<>', $berita);
            $q_mamujutv = DB::table('mamujutv')->where('url', '<>', $berita);
            $q_foto = DB::table('foto')->where('url', '<>', $berita);
            $q_infografis = DB::table('infografis')->where('url', '<>', $berita);

    		// Data table
            $berita_infografis = Infografis::where('url', $berita)->where('display', 'Yes')->where('id_kategori', $id_kategori->id)->first();
            $berita_mamuju = Mamujutv::where('url', $berita)->where('display', 'Yes')->where('id_kategori', $id_kategori->id)->first();
            $berita_foto = Foto::where('url', $berita)->where('display', 'Yes')->where('id_kategori', $id_kategori->id)->first();
            $berita_berita = Berita::where('url', $berita)->where('display', 'Yes')->where('id_kategori', $id_kategori->id)->first();

            // Query untuk berita lainnya
            $q_berita = DB::table('berita')
            ->where('display', 'Yes')
            ->where('url', '<>', $berita);

            $q_mamujutv = DB::table('mamujutv')
            ->where('display', 'Yes')
            ->where('url', '<>', $berita);

            $q_foto = DB::table('foto')
            ->where('display', 'Yes')
            ->where('url', '<>', $berita);

            $q_infografis = DB::table('infografis')
            ->where('display', 'Yes')
            ->where('url', '<>', $berita);

            $data_lainnya = $q_berita
                            ->union($q_mamujutv)
                            ->union($q_foto)
                            ->union($q_infografis)
                            ->orderBy('time', 'desc')
                            ->take(3)
                            ->get();

            // Query untuk berita terkait
            $q2_berita = DB::table('berita')->where('url', '<>', $berita)->where('display', 'Yes')->where('id_kategori', $id_kategori->id);
            $q2_mamujutv = DB::table('mamujutv')->where('url', '<>', $berita)->where('display', 'Yes')->where('id_kategori', $id_kategori->id);
            $q2_foto = DB::table('foto')->where('url', '<>', $berita)->where('display', 'Yes')->where('id_kategori', $id_kategori->id);
            $q2_infografis = DB::table('infografis')->where('url', '<>', $berita)->where('display', 'Yes')->where('id_kategori', $id_kategori->id);
            $data_terkait = $q2_berita
                            ->union($q2_mamujutv)
                            ->union($q2_foto)
                            ->union($q2_infografis)
                            ->orderBy('time', 'desc')
                            ->take('5')
                            ->get();

            if ($berita_infografis) {
                $berita = $berita_infografis;
                $visitor_table = 'infografis';
            } elseif ($berita_mamuju) {
                $berita = $berita_mamuju;
                $visitor_table = 'mamujutv';
            } elseif ($berita_foto) {
                $berita = $berita_foto;
                $visitor_table = 'foto';
            } else {
                $berita = $berita_berita;
                $visitor_table = 'berita';
            }
            $kategori = $id_kategori->nama_kategori;
            $berita_popular = Berita::orderBy('visitor', 'desc')->where('display', 'Yes')->where('source_type', 'gambar')->take(5)->get();
            $menu = Kategori::where('display', 'Yes')->where('display', 'Yes')->where('as_menu', 'true')->get();
            $komentar = Komentar::where('id_berita', $berita->id)->where('display', 'Yes')->where('berita_table', $visitor_table)->get();
            
            if ($agent->isMobile()){
                $sub_domain = explode('.', $_SERVER['HTTP_HOST'])[0];
                if ($sub_domain == 'm') {
                    $page = 'm_frontpage.m_frontpage_view';
                } else {
                    return redirect($this->domain_mobile.''.parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
                }
            } else {
                $page = 'frontpage.frontpage_view';
            }
            return view($page)
            ->with('kategori', $kategori)
            ->with('berita_popular', $berita_popular)
            ->with('berita_terkait', $data_terkait)
            ->with('berita_lainnya', $data_lainnya)
            ->with('berita', $berita)
            ->with('visitor_table', $visitor_table)
            ->with('iklan', $iklan)
            ->with('komentar', $komentar)
            ->with('menu', $menu);
	    	
    	// } catch (\Exception $e) {
    	// 	return redirect()->action('FrontPage\ErrorController@E500');
    	// }
    	
    	
    }

    public function group($kategori)
    {
        try {
            $agent = new Agent();
            $iklan = [
                'iklan1' => Iklan::where('position', 'iklan1')->first(),
                'iklan2' => Iklan::where('position', 'iklan2')->first(),
                'iklan3' => Iklan::where('position', 'iklan3')->first(),
                'iklan4' => Iklan::where('position', 'iklan4')->first(),
                'iklan5' => Iklan::where('position', 'iklan5')->first(),
                'iklan6' => Iklan::where('position', 'iklan6')->first(),
                'iklan7' => Iklan::where('position', 'iklan7')->first()
            ];

            $kategori = Kategori::where('nama_kategori', $kategori)->first();
            $berita = DB::table('berita')->where('id_kategori', $kategori->id);
            $mamujutv = DB::table('mamujutv')->where('id_kategori', $kategori->id);
            $foto = DB::table('foto')->where('id_kategori', $kategori->id);
            $infografis = DB::table('infografis')->where('id_kategori', $kategori->id);

            $data_slider = $berita->unionAll($mamujutv)->unionAll($foto)->unionAll($infografis)->take('5')->get();
            $data = $berita->unionAll($mamujutv)->unionAll($foto)->unionAll($infografis)->get();
            $berita_popular = Berita::orderBy('visitor', 'desc')->where('source_type', 'gambar')->take(5)->get();
            $menu = Kategori::where('display', 'Yes')->where('as_menu', 'true')->get();
            if ($agent->isMobile()){
                $sub_domain = explode('.', $_SERVER['HTTP_HOST'])[0];
                if ($sub_domain == 'm') {
                    $page = 'm_frontpage.m_frontpage_group';
                } else {
                    return redirect($this->domain_mobile);
                    $page = 'frontpage.frontpage_view_group';
                }
            } else {
                $page = 'frontpage.frontpage_view_group';
            }
            return view($page)
            ->with('data_slider', $data_slider)
            ->with('iklan', $iklan)
            ->with('menu', $menu)
            ->with('berita_popular', $berita_popular)
            ->with('data', $data);
        } catch (\Exception $e) {
            return redirect()->action('FrontPage\ErrorController@E500');
        }
        
    }

    public function komentar(Request $request,$table, $id)
    {
        try {
            $user = Auth::user()->id;
            Komentar::insert($request, $user, $table, $id);
            return back();
        } catch (\Exception $e) {
            return redirect()->action('FrontPage\ErrorController@E500');
        }
    }

    public function pencarian(Request $request)
    {
        try {
            $iklan = [
                'iklan1' => Iklan::where('position', 'iklan1')->first(),
                'iklan2' => Iklan::where('position', 'iklan2')->first(),
                'iklan3' => Iklan::where('position', 'iklan3')->first(),
                'iklan4' => Iklan::where('position', 'iklan4')->first(),
                'iklan5' => Iklan::where('position', 'iklan5')->first(),
                'iklan6' => Iklan::where('position', 'iklan6')->first(),
                'iklan7' => Iklan::where('position', 'iklan7')->first()
            ];
            $mamujutv = Mamujutv::orderBy('time', 'desc')->where('display', 'yes')->take(5)->get();
            $berita_popular = Berita::orderBy('visitor', 'desc')->where('source_type', 'gambar')->take(5)->get();
            $menu = Kategori::where('display', 'Yes')->where('as_menu', 'true')->get();

            // JOIN TABLE
            $q_berita = DB::table('berita')
            ->where('display', 'Yes')
            ->where('judul', 'like',  '%'.$request->input('q').'%')
            ->orWhere('konten', 'like', '%'.$request->input('q').'%');

            $q_mamujutv = DB::table('mamujutv')
            ->where('display', 'Yes')
            ->where('judul', 'like',  '%'.$request->input('q').'%')
            ->orWhere('konten', 'like', '%'.$request->input('q').'%');

            $q_foto = DB::table('foto')
            ->where('display', 'Yes')
            ->where('judul', 'like',  '%'.$request->input('q').'%')
            ->orWhere('konten', 'like', '%'.$request->input('q').'%');

            $q_infografis = DB::table('infografis')
            ->where('display', 'Yes')
            ->where('judul', 'like',  '%'.$request->input('q').'%')
            ->orWhere('konten', 'like', '%'.$request->input('q').'%');

            $data = $q_berita
                    ->union($q_mamujutv)
                    ->union($q_foto)
                    ->union($q_infografis)
                    ->orderBy('time', 'desc')
                    ->get();
            return view('frontpage.frontpage_search')
                ->with('data', $data)
                ->with('iklan', $iklan)
                ->with('mamujutv', $mamujutv)
                ->with('berita_popular', $berita_popular)
                ->with('menu', $menu);
        } catch (\Exception $e) {
            return redirect()->action('FrontPage\ErrorController@E500');
        }
        
    }

    public function loadMore(Request $request)
    {
        try {
            $iklan = [
                'iklan1' => Iklan::where('position', 'iklan1')->first(),
                'iklan2' => Iklan::where('position', 'iklan2')->first(),
                'iklan3' => Iklan::where('position', 'iklan3')->first(),
                'iklan4' => Iklan::where('position', 'iklan4')->first(),
                'iklan5' => Iklan::where('position', 'iklan5')->first(),
                'iklan6' => Iklan::where('position', 'iklan6')->first(),
                'iklan7' => Iklan::where('position', 'iklan7')->first()
            ];
            $mamujutv = Mamujutv::orderBy('time', 'desc')->where('display', 'yes')->take(5)->get();
            $berita_popular = Berita::orderBy('visitor', 'desc')->where('source_type', 'gambar')->take(5)->get();
            $menu = Kategori::where('display', 'Yes')->where('as_menu', 'true')->get();

            // JOIN TABLE
            $q_berita = DB::table('berita')->where('display', 'Yes');
            $q_mamujutv = DB::table('mamujutv')->where('display', 'Yes');
            $q_foto = DB::table('foto')->where('display', 'Yes');
            $q_infografis = DB::table('infografis')->where('display', 'Yes');
            $data = $q_berita
                    ->union($q_mamujutv)
                    ->union($q_foto)
                    ->union($q_infografis)
                    ->orderBy('time', 'desc')
                    ->get();
            return view('frontpage.frontpage_more_berita')
                ->with('data', $data)
                ->with('iklan', $iklan)
                ->with('mamujutv', $mamujutv)
                ->with('berita_popular', $berita_popular)
                ->with('menu', $menu);
            // return Pagination::splitJson($data)['page1'];
        } catch (\Exception $e) {
            return redirect()->action('FrontPage\ErrorController@E500');
        }
    }
}
