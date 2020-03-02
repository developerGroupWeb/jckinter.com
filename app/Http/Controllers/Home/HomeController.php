<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use App\Services\CurrencyConverterService;

class HomeController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|View
     */
    function index(Request $request){

        $default_currency = CurrencyConverterService::get_default_currency($request);

        return view('home.welcome',[
            'default_currency' => $default_currency
        ]);
    }



}
