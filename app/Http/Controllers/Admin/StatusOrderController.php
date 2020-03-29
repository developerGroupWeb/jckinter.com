<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\StatusOrderEmail;
use App\Models\Admin\StatusOrder;
use App\Models\OrderCurrency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

            if($request->status === 'completed'){
                 OrderCurrency::whereTrack_order($request->track_order)->update([
                    'processing' => 1
                 ]);
            }else{
                OrderCurrency::whereTrack_order($request->track_order)->update([
                    'processing' => 0
                ]);
            }

            $this->send_email_status_order($request->track_order, $request->status);

            return response()->json(['success' => true, 'message' => "Client {$request->track_order} status has been updated"]);


        }
    }


    protected function send_email_status_order($track_order, $status){

        $order = OrderCurrency::whereTrack_order($track_order)->first();

        $user  = User::whereId($order->user_id)->first();

        Mail::to($user->email)->send(new StatusOrderEmail($user, $status));
    }
}
