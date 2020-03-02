<?php

namespace App\Http\Middleware\en;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;



class UserConnected
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $sessions      = session()->get('currency_user');

        session()->put('user_unknown', $request->all());

        if(!isset($sessions['email']) || !isset($sessions['password'])){
            return redirect(route('login.index'));
        }
        return $next($request);
    }
}
