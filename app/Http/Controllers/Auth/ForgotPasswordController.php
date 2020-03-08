<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ForgotPasswordController extends Controller
{
    /**
     * @return Factory|View
     */
    function index(){

        return view(request()->segment(1).'.auth.forgotpassword');
    }

    function store(Request $request){

        $validate = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email']
        ]);

        if($request->ajax()){

            if($validate->fails()){
                return response()->json(['success' => false, 'message' => $validate->errors()]);
            }

            if(User::whereEmail($request->email)->count() === 0){
                return response()->json(['success' => false, 'message' => 'This email doesn\'t correspond to a user']);
            }

            session()->flash('success', "We send you an email to <strong> $request->email</strong> with a link to change your password");
            return response()->json(['success' => true, 'status' => 200]);
        }

        if($validate->fails()){
            return back();
        }

        if(User::whereEmail($request->email)->count() === 0){
            session()->flash('error', 'This email doesn\'t correspond to a user');
            return back();
        }

        session()->flash('success', "We send you an email to <strong>{$request->email}</strong> with a link to change your password");
        return redirect()->route('login.index');

    }
}
