<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderCurrency;
use Illuminate\Http\Request;

class OrdersAdminController extends Controller
{
    function index(){

        $orders = OrderCurrency::whereStatus(true)->whereProcessing(0)->latest()->paginate(6);
        //dd($orders);

        return view(app()->getLocale().'.admin.orders-list',[
            'orders' => $orders
        ]);
    }
}
