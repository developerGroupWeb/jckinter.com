<?php


namespace App\Services;


use App\Models\Admin\UserAdmin;

class LoginAdminService
{

    static function authentic_user($request){

        $user = UserAdmin::whereEmail($request->email)->count();
        $error = [];

        if($user === 0){
            return $error = ['email' => "This email doesn't correspond to a user"];
        }

        $user = UserAdmin::whereEmail($request->email)->first();


        if ($user->password !== sha1($request->password)) {

            return $error = ['password' =>  "Your password is incorrect"];
        }

        session()->put('currency_user_admin', [
            'id'         => $user->id,
            'email'      => $user->email,
            'name'       => $user->name,
            'role'       => $user->role,
            'photo'      => $user->photo
        ]);

    }

}
