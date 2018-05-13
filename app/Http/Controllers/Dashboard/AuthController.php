<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Helper\ResponseRedirect;
use App\Model\User;
class AuthController extends Controller
{
    public function viewerLogin()
    {
    	return view('dashboard.logister.login');
    }

    public function loginValidator(Request $request)
    {
        try {
            $email = $request->input('email');
            $password = $request->input('password');

            $user = User::where('email', $email)->first();

            if ($user) {
                $result_user = $user->role;
            } else {
                $result_user = '';
            }

            if ($result_user == 'admin') {
                $role = 'admin';
            } elseif($result_user == 'SU'){
                $role = 'SU';
            } else{
                $role = '';
            }

            // jika user admin atau super_admin
            if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => $role])) {
                return redirect('/dashboard');
            } else {
                return ResponseRedirect::go('db_login', 'Username atau password salah', 'danger');
            }
        } catch (\Exception $e) {
            return redirect()->action('FrontPage\ErrorController@E500');
        }
    }
}
