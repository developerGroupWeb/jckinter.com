<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderCurrency;
use Illuminate\Http\Request;

class TranslationDetailAdminController extends Controller
{
    function index(){

        $order = OrderCurrency::whereTrack_order(request()->input('track_order'))->first();
        if(!$order){
            return back();
        }
        return view(app()->getLocale().'.admin.translation-detail',[
            'order' => $order
        ]);
    }

}
