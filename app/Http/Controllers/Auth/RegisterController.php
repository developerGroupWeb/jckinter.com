<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegisterFormRequest;
use App\Mail\ConfirmAccountEmail;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class RegisterController extends Controller{

    /**
     * @return Factory|View
     */
    function index(){

        return view(app()->getLocale().'.auth.register');
    }

    /**
     * @param $language
     * @param StoreRegisterFormRequest $formRequest
     * @return RedirectResponse
     */
    function store($language, StoreRegisterFormRequest $formRequest){

        $geolocation = geoip()->getLocation($formRequest->ip());

        $country = $geolocation->country;
        $address = $geolocation->postal_code.', '.$geolocation->city;

        $create = User::create([

            'full_name' => $formRequest->full_name,
            'email'     => $formRequest->email,
            'password'  => sha1($formRequest->password),
            'terms'     => $formRequest->terms,
            'id_confirmation' => User::getUniqueCode(),
            'address' => $address,
            'country' => $country
        ]);

        if($create){

            $this->send_email_confirm_account($formRequest);

            session()->flash('success', "We send you an email to <strong>{$formRequest->email}</strong> with a link to confirm your account");

            return redirect()->route('login.index', ['language' => app()->getLocale()]);
        }
    }

    function confirm($language, $id_confirmation){

        if(time_expire_link($id_confirmation)){

            User::whereId_confirmation($id_confirmation)->update([
                'id_confirmation' => User::getUniqueCode(),
                'confirm_account' => 1
            ]);
            return redirect()->route('login.index', ['language' => app()->getLocale()])->with('success', 'Your account has been confirmed');
        }

        return redirect()->route('login.index', ['language' => app()->getLocale()])->with('danger', 'Your account has already been confirmed or We cannot confirm your account for security reasons');
    }

    protected function send_email_confirm_account($formRequest){

        $user = User::whereEmail($formRequest->email)->first();
        Mail::to($formRequest->email)->send(new ConfirmAccountEmail($user));
    }
}

