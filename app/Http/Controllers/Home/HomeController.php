<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * @return Factory|View
     */
    function index(){

        return view('home.welcome');
    }


    /**
     * @return Factory|RedirectResponse|View
     */
    function thanks(){

        return (Session::has('thanks')) ? view('home.thanks') : redirect()->route('currencyconverter.index');
    }
}
