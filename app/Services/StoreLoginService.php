<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\Session;


class StoreLoginService
{

    static function authentic_user($request){

        $user = User::whereEmail($request->email)->count();
        $error = [];

        if($user === 0){
            return $error = ['email' => "This email doesn't correspond to a user"];
        }

        $user = User::whereEmail($request->email)->first();

        if(!$user->confirm_account){

            return $error = ['confirm' => "Your account has not been confirmed yet"] ;
        }

        if ($user->password !== sha1($request->password)) {

            return $error = ['password' =>  "Your password is incorrect"];
        }

        session()->put('currency_user', [
            'id'         => $user->id,
            'email'      => $user->email,
            'full_name'  => $user->full_name,
            'terms'      => $user->terms,
            'password'   => $user->password,
        ]);

        if (isset($request->remember)) {

            session()->put('remember',  $request->remember);
            $sessions = session()->get('currency_user');

            cookie('email', $sessions['email'], 4320);
            cookie('password', $sessions['password'], 4320);
        }


    }
}
