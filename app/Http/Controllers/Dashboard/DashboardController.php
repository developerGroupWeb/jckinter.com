<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\OrderCurrency;
use App\Models\PhotoReceiver;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Stripe\Exception\ApiErrorException;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class DashboardController extends Controller
{
    /**
     * @return Factory|View
     * @throws ApiErrorException
     */
    function index(){

        $user_id = Session::get('currency_user')['id'];

        $user  = User::findOrFail($user_id);



        if(Session::has('fake_order') && (Session::get('fake_order')['amount_send']) != null){

            $fake_order  = Session::get('fake_order');
            $order        = $user->order_currencies()->whereStatus(false)->first();

            if($order == null){
                if($fake_order['exchange']){
                    $user->order_currencies()->create($fake_order);
                    session()->forget('fake_order');
                }
            }
        }

        $order        = $user->order_currencies()->whereStatus(false)->first();
        $order_active = $user->order_currencies()->whereStatus(true)->get();



        if($order){

            Stripe::setApiKey('sk_test_CyYhDwNBrYKG3adFgImami2U005IuJwQYT');

            $intent = PaymentIntent::create([
                'amount' => $order->total * 100,
                'currency' => strtolower($order->devise_send),
            ]);

            $client_secret = Arr::get($intent, 'client_secret');

            return view(request()->segment(1).'.dashboard.dashboard',[
                'order' => $order,
                'order_active' => $order_active,
                'client_secret' => $client_secret,
                'key'  => 'pk_test_9imYEL8mumJEeTOnMQ6TWJ8C00tI1lkhDN'
            ]);
        }

        return view(request()->segment(1).'.dashboard.dashboard',[
            'order' => $order,
            'order_active' => $order_active,
            'key'  => 'pk_test_9imYEL8mumJEeTOnMQ6TWJ8C00tI1lkhDN'
        ]);
    }

    /**
     * @return RedirectResponse
     */
    function logout(){

        $user = session()->get('currency_user');
        $user_admin = session()->get('currency_user_admin');

        if(!empty($user)){

            session()->forget('currency_user');
            session()->forget('fake_order');
            return redirect()->route('home.index', ['language' => app()->getLocale()]);
        }

        if(!empty($user_admin)){

            session()->forget('currency_user_admin');
            return redirect()->route('login.admin.index', ['language' => app()->getLocale()]);
        }

    }
}
