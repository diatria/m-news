<?php

namespace App\Http\Controllers\FrontPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ErrorController extends Controller
{
    public function E500()
    {
    	return view('error.500');
    }

    public function maintenance()
    {
    	return view('error.maintenance');
    }
}
