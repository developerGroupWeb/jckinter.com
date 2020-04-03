<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderCurrency;


class TranslationDetailAdminController extends Controller
{
    function index(){


        $order = OrderCurrency::with('user')->whereHas('user', function ($query){
            $query->whereTrack_order(request()->input('track_order'));
        })->first();

        if(!$order){
            return back();
        }
        return view(app()->getLocale().'.admin.translation-detail',[
            'order' => $order
        ]);
    }

}
