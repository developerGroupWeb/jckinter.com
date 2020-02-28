<?php


namespace App\Services;


use App\Models\User;


class StoreLoginService
{

    static function authentic_user($request){

        $user = User::whereEmail($request->email)->count();
        $error = [];

        if($user === 1){

            $user = User::whereEmail($request->email)->first();

            if ($user->password === sha1($request->password)) {

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

            } else {
                $error['password'] =  "Your password is incorrect";
            }
        }else{
            $error['email'] = "This email doesn't correspond to a user";
        }

        return $error;
    }
}
