<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAdminFormRequest;

use App\Models\User;
use App\Services\LoginAdminService;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class LoginAdminController extends Controller
{
    /**
     * @return Factory|View
     */
    function index(){

        return view(app()->getLocale().'.auth.login');
    }

    /**
     * @param LoginAdminFormRequest $formRequest
     * @return RedirectResponse
     */
    function store(LoginAdminFormRequest $formRequest){

        $error = LoginAdminService::authentic_user($formRequest);


        if($formRequest->ajax()){

            if(empty($error)){
                return response()->json(['success' => true, 'user' => Session::get('currency_user')['full_name']], 200);
            }
            return response()->json(['success' => false, 'message' => $error]);
        }


        if(empty($error)){

            $user = User::whereEmail($formRequest->email)->first();


            return redirect()->route('dashboard.index', strtolower($user->full_name));
        }
        return redirect()->route('login.index')->with('error', $error);

    }
}
