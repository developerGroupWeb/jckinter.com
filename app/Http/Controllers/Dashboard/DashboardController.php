<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){

        return view('dashboard.dashboard');
    }

    /**
     * @return RedirectResponse
     */
    function logout(){

        $user = session()->get('currency_user');

        if(!empty($user)){
            session()->forget('currency_user');
            return redirect()->route('home.index');
        }
    }
}
