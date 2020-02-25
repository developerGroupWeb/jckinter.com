<?php

namespace App\Http\Controllers\CurrencyConverter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyConverterController extends Controller
{

    function index(){

        return view('currencyconverter.welcome');
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
