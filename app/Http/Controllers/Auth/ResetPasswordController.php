<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeResetPasswordFormRequest;
use App\Models\User;


class ResetPasswordController extends Controller
{

    function index($language, $id_confirmation){
        //dd($id_confirmation);
        if(!time_expire_link($id_confirmation)){
            return redirect()->route('login.index', app()->getLocale())->with('danger', 'The link is invalid or has been already expired');
        }

        return view(app()->getLocale().'.auth.reset-password');
    }

    function store($language, StoreResetPasswordFormRequest $formRequest, $id_confirmation){

        User::whereId_confirmation($id_confirmation)->update([
            'id_confirmation' => User::getUniqueCode(),
            'password'        => sha1($formRequest->password)
        ]);
        return redirect()->route('login.index', app()->getLocale());
    }

}
