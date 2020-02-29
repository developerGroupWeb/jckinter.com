<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeLoginFormRequest;
use App\Providers\RouteServiceProvider;
use App\Services\StoreLoginService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * @return Factory|View
     */
   function index(){

       return view('auth.login');
   }

    /**
     * @param StoreLoginFormRequest $formRequest
     * @return RedirectResponse
     */
    function store(StoreLoginFormRequest $formRequest){


        $error = StoreLoginService::authentic_user($formRequest);
        if(!empty($error)){
            return redirect()->route('login.index')->with('error', $error);
        }

        return redirect()->route('checkout.index');
    }
}
