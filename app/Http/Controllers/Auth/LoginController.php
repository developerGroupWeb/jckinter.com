<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeLoginFormRequest;
use App\Models\User;

use App\Services\StoreLoginService;
use Illuminate\Contracts\View\Factory;

use Illuminate\Http\RedirectResponse;


use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * @return Factory|View
     */
   function index(){


       return view('auth.login')->with('t', 'ok');
   }

    /**
     * @param storeLoginFormRequest $formRequest
     * @return RedirectResponse
     */
    function store(StoreLoginFormRequest $formRequest){

        $error = StoreLoginService::authentic_user($formRequest);

        if($formRequest->ajax()){

            if(empty($error)){
                return response()->json(['success', true], 200);
            }
            return response()->json($error);
        }


        if(empty($error)){

            $user = User::whereEmail($formRequest->email)->first();

            return redirect()->route('dashboard.index', strtolower($user->full_name));
        }
        return redirect()->route('login.index')->with('error', $error);

    }
}
