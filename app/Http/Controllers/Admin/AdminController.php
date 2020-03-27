<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\StatusOrder;
use App\Models\OrderCurrency;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        $orders = OrderCurrency::latest()->get();
        return view(app()->getLocale().'.admin.jck-admin',[
            'orders' => $orders
        ]);
    }
}
