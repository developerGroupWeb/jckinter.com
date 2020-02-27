<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    function index(){

        return view('home.welcome');
    }

    function login(){
        return view('home.singin');
    }

    function register(){
        return view('home.singup');
    }

    function thanks(){

        return (Session::has('thanks')) ? view('home.thanks') : redirect()->route('currencyconverter.index');
    }
}
