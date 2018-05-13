<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Storage;

// Model
use App\Model\User;

// Helper
use App\Helper\ResponseRedirect;
class PenggunaController extends Controller
{
    public function adminViewer()
    {
        try {
        	$data = User::where('role', 'admin')->orWhere('role', 'SU')->get();
        	return view('dashboard.pengguna.pengguna_admin')
        	->with('data', $data);
        } catch (\Exception $e) {
            return redirect()->action('FrontPage\ErrorController@E500');
        }
    }

    public function userViewer()
    {
        try {
        	$data = User::where('role', 'user')->get();
        	return view('dashboard.pengguna.pengguna_user')
        	->with('data', $data);
        } catch (\Exception $e) {
            return redirect()->action('FrontPage\ErrorController@E500');
        }
    }

    public function addViewer()
    {
    	return view('dashboard.pengguna.pengguna_create');
    }

    public function add(Request $request)
    {
    	try {
    		$file = $request->file('image');
			if ($file != null) {
				$file_store = Storage::disk('public')->put('user', $file);
		        $file_name = asset('storage').'/'.$file_store;
	    	} else {
	    		$file_name = null;
	    	}
			User::insert($request, $file_name, 'admin');
			return ResponseRedirect::go('db_pengguna/add', 'Berhasil membuat user', 'success');
    	} catch (\Exception $e) {
    		return redirect()->action('FrontPage\ErrorController@E500');
    	}
    	
    }
}
