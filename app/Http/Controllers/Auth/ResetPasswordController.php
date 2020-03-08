<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeResetPasswordFormRequest;
use App\Mail\ResetPasswordEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{

    function index(){

        return view(request()->segment(1).'.auth.reset-password');
    }

    function store(StoreResetPasswordFormRequest $formRequest){

        dd($formRequest);
    }

    function send_email_reset_password(StoreResetPasswordFormRequest $formRequest){

        $user = User::whereEmail($formRequest->email)->first();
        Mail::to($formRequest->email)->send(new ResetPasswordEmail($user));
    }
}
