<?php

namespace App\Http\Controllers\CurrencyConverter;

use App\Http\Controllers\Controller;
use App\Services\CurrencyConverterService;
use Illuminate\Http\Request;

class CurrencyConverterController extends Controller
{

    function index(Request $request){

        $default_currency = CurrencyConverterService::get_default_currency($request);

        return view('currencyconverter.welcome',[
            'default_currency' => $default_currency
        ]);
    }


    function store(Request $request){
        dd($request->all());
    }




    function test(){
        return view('currencyconverter.test-ajax');
    }

    function loaddata(){

        for($i = 0; $i <= 33333335555555555; $i++){
            echo "Noting";
        }
    }
}
