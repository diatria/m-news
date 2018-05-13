<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\Helper\ResponseRedirect;
use App\Model\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function viewer()
    {
        return view('frontpage.frontpage_login');
    }

    public function loginValidator(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        // jika user biasa
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 'user'])) {
            return redirect('/');
        } else {
            return ResponseRedirect::go('login', 'Username atau password salah', 'danger');
        }
    }

    public function revoke()
    {
        Auth::logout();
        return redirect('/');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $check_user = User::where('email', $user->getEmail())->first();

        if ($check_user) {
            Auth::loginUsingId($check_user->id);
            return redirect('/');
        } else {
            $auth_user = User::insertSocial($user->getName(), $user->getEmail(), $user->getAvatar(), 'user');
            Auth::loginUsingId($auth_user->id);
            return redirect('/');
        }
    }
}
