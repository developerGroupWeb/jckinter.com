<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeRegisterFormRequest;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterController extends Controller{

    /**
     * @return Factory|View
     */
    function index(){

        return view('auth.register');
    }

    /**
     * @param storeRegisterFormRequest $formRequest
     * @return RedirectResponse
     */
    function store(storeRegisterFormRequest $formRequest){

        $create = User::create($formRequest->all());
        if($create){
            return redirect()->route('login.index');
        }
    }
}

