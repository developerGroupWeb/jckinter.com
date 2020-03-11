<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePhotoReceiverFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserReceiverController extends Controller
{
    function photo_receiver(Request $request){

        if($request->ajax()){

            $validate  = Validator::make($request->all(),[
                'image' => ['required', 'image', 'dimensions:max_width:1200, max_height:1200']
            ]);

            if($validate->fails()){
                return response()->json(['error', $validate->errors()]);
            }

            $user = User::findOrFail(Session::get('currency_user')['id']);

            $file = $request->file('image')->store('photo_receivers');
            $file = explode('/', $file);
            $file = end($file);


            /*$update = $user->user_receivers()->update([
                'photo' => $file
            ]);*/
            //if($update === 0){
                $user->order_currencies()->update([
                    'photo' => $file
                ]);
            //}


            return response()->json(['success' => true, 'file_name' => $file, 'status' => 200]);

        }
    }

    function user_receiver(Request $request){

        if($request->ajax()){

            $user = User::findOrFail(Session::get('currency_user')['id']);

            $update = $user->order_currencies()->update($request->all());

            if($update)
               return response()->json(['success' => true, 'status' => 200]);
        }
    }
}
