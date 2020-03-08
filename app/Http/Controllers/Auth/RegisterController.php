<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegisterFormRequest;
use App\Mail\ConfirmAccountEmail;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class RegisterController extends Controller{

    /**
     * @return Factory|View
     */
    function index(){

        return view(request()->segment(1).'.auth.register');
    }

    /**
     * @param StoreRegisterFormRequest $formRequest
     * @return RedirectResponse
     */
    function store(StoreRegisterFormRequest $formRequest){

        $create = User::create([
            'full_name' => $formRequest->full_name,
            'email'     => $formRequest->email,
            'password'  => sha1($formRequest->password),
            'terms'     => $formRequest->terms,
            'id_confirmation' => User::getUniqueCode()
        ]);
        if($create){
            return redirect()->route('login.index');
        }
    }

    function send_email_confirm_account(StoreRegisterFormRequest $formRequest){

        $user = User::whereEmail($formRequest->email)->first();
        Mail::to($formRequest->email)->send(new ConfirmAccountEmail($user));
    }
}

