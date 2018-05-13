<?php

namespace App\Http\Controllers\FrontPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Storage;

use App\Model\User;

// Helper
use App\Helper\ResponseRedirect;
class UserDashboardController extends Controller
{
    public function viewer()
    {
        // try {
        	$user = User::where('id', Auth::user()->id)->first();
        	return view('frontpage.frontpage_dashboard')
        	->with('user', $user);
        // } catch (\Exception $e) {
        //     return redirect()->action('FrontPage\ErrorController@E500');
        // }
    }

    public function change(Request $request)
    {
    	try {
    		$file = $request->file('image');
    		if ($file != null) {
				$file_store = Storage::disk('public')->put('user', $file);
		        $file_name = asset('storage').'/'.$file_store;
	    	} else {
	    		$file_name = null;
	    	}
			User::change($request, Auth::user()->id, $file_name, 'user');
			return ResponseRedirect::go('user/dashboard', 'Berhasil memperharui profil', 'success');
    	} catch (\Exception $e) {
    		return redirect()->action('FrontPage\ErrorController@E500');
    	}
    	
    }
}
