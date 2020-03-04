<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\OrderCurrency;
use App\Models\PhotoReceiver;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * @return Factory|View
     */
    function index(){

        $user_id = Session::get('currency_user')['id'];

        $user  = User::findOrFail($user_id);

        if(Session::has('fake_order') && isset(Session::get('fake_order')['amount_send'])){
            $fake_order  = Session::get('fake_order');
            $user->order_currencies()->create($fake_order);
        }

        $photo_receiver  = $user->photo_receivers()->latest()->first();
        $order           = $user->order_currencies()->whereStatus(false)->first();

        return view(request()->segment(1).'.dashboard.dashboard',[
            'order' => $order,
            'photo_receiver' => $photo_receiver
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
