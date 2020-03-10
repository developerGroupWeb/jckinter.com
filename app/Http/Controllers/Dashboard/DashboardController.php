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

        if(Session::has('fake_order') && isset(Session::get('fake_order')['amount_send'])){

            $fake_order  = Session::get('fake_order');

            if($fake_order['exchange']){
                $user->order_currencies()->create($fake_order);
                session()->forget('fake_order');
            }
        }

        $order = $user->order_currencies()->whereStatus(false)->first();


        if($order){

            Stripe::setApiKey('sk_test_l8dRncid0zKE6ZLVkBYzHq8800xiQKkVLr');

            $intent = PaymentIntent::create([
                'amount' => $order->total * 100,
                'currency' => strtolower($order->devise_send),
            ]);

            $client_secret = Arr::get($intent, 'client_secret');

            return view(request()->segment(1).'.dashboard.dashboard',[
                'order' => $order,
                'client_secret' => $client_secret,
            ]);
        }

        return view(request()->segment(1).'.dashboard.dashboard',[
            'order' => $order,
        ]);
    }

    /**
     * @return RedirectResponse
     */
    function logout(){

        $user = session()->get('currency_user');

        if(!empty($user)){

            session()->forget('currency_user');
            session()->forget('fake_order');

            return redirect()->route('home.index');
        }
    }
}
