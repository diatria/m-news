<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AuthenticationAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $validator = !empty(Auth::user()->role) ? Auth::user()->role : "";
        if ($validator == 'admin') {
            return $next($request);
        } elseif($validator == 'SU') {
            return $next($request);
        }else {
            return redirect('db_login');
        }
    }
}
