<?php

namespace App\Http\Middleware\en;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserAdmin
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
        if(!Session::has('currency_user_admin')){
            return redirect()->route('login.admin.index', ['language' => app()->getLocale()]);
        }
        return $next($request);
    }
}
