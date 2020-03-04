<?php

namespace App\Http\Middleware\en;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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

        if(!Session::get('fake_order')){

            session()->put('fake_order', [

                'amount_send'    => $request->amount_send,
                'amount_receive' => $request->amount_receive,
                'exchange'       => $request->exchange,
                'devise_send'    => $request->devise_send,
                'devise_receive' => 'XOF',
                'country'        => $request->country,
                'fees'           => 5,
                'total'          => $request->total,
            ]);
        }

        if(!isset($sessions['email']) || !isset($sessions['password'])){
            return redirect(route('login.index'));
        }

        return $next($request);
    }
}
