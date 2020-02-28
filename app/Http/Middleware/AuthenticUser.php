<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticUser
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $sessions = session()->get('currency_user');

        if(!isset($sessions['email']) || !isset($sessions['password'])){
            return redirect(route('login.index'));
        }
        return $next($request);
    }
}
