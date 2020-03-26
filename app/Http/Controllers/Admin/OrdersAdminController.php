<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderCurrency;
use Illuminate\Http\Request;

class OrdersAdminController extends Controller
{
    function index(){

        $orders = OrderCurrency::latest()->get();

        return view(app()->getLocale().'.admin.orders-list',[
            'orders' => $orders
        ]);
    }
}
