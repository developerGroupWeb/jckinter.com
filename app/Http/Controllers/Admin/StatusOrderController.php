<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\StatusOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StatusOrderController extends Controller
{
    function update(Request $request){

        if($request->ajax()){

            $validate = Validator::make($request->all(), [
                'status' => ['required', Rule::in(['pending', 'prepared','completed', 'on the way'])],
                'track_order' => ['required', 'integer']
            ]);

            if ($validate->fails()){
                return response()->json(['success' => false, 'message' => $validate->errors()->get('status')]);
            }

            if(StatusOrder::whereTrack_order($request->track_order)->count() === 0){
                StatusOrder::create($request->all());
            }else{
                StatusOrder::whereTrack_order($request->track_order)->update([
                    'status' => $request->status
                ]);
            }

            return response()->json(['success' => true, 'message' => "Client {$request->track_order} status has been updated"]);


        }
    }
}
