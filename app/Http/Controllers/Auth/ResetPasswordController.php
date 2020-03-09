<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeResetPasswordFormRequest;
use App\Models\User;


class ResetPasswordController extends Controller
{

    function index($id_confirmation){

        if(User::whereId_confirmation($id_confirmation)->count() === 0){
            return redirect()->route('login.index')->with('danger', 'The link is invalid or has been already expired');
        }

        return view(request()->segment(1).'.auth.reset-password');
    }

    function store(StoreResetPasswordFormRequest $formRequest, $id_confirmation){

        User::whereId_confirmation($id_confirmation)->update([
            'id_confirmation' => User::getUniqueCode(),
            'password'        => sha1($formRequest->password)
        ]);
        return redirect()->route('login.index');
    }

}
