<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Helper\ResponseRedirect;

use App\Model\User;
class RegisterController extends Controller
{
    public function viewer()
    {
        return view('frontpage.frontpage_register');
    }

    public function add(Request $request, $type)
    {
        try {
            User::insert($request, $type);
            return ResponseRedirect::go('register', 'Berhasil mendaftar', 'success');
        } catch (\Exception $e) {
            return $e->getMessage();   
        }
    }
}
