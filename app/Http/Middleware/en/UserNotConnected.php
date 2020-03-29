<?php

namespace App\Http\Middleware\en;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class UserNotConnected
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
        $sessions  = session()->get('currency_user');
        if(isset($sessions['id'])){
           return redirect()->route('dashboard.index', ['language' => app()->getLocale(), strtolower($sessions['full_name'])]);
        }
        return $next($request);
    }
}
