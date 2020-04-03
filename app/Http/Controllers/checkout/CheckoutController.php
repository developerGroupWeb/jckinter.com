<?php

namespace App\Http\Controllers\checkout;

use App\Http\Controllers\Controller;
use App\Mail\OrderSuccessEmail;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        return redirect()->route('dashboard.index', strtolower(Session::get('currency_user')['full_name']));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     * @throws \Exception
     */
    public function update(Request $request)
    {
        $data = $request->json()->all();

        if($data['paymentIntent']['status'] === "succeeded"){

            $user_id    = Session::get('currency_user')['id'];
            $fake_order =  Session::get('fake_order');


            $user   = User::findOrFail($user_id);

            $update = $user->order_currencies()->whereStatus(false)->update([

                'payment_intent_id' => $data['paymentIntent']['id'],
                'payment_created_at' => (new \DateTime())
                   ->setTimestamp($data['paymentIntent']['created'])
                   ->format('Y-m-d H:i:s'),

               'status' => true
            ]);

            if($update){
                $this->send_order_success_email($user);
            }

            Session::flash('thanks', 'Your order has been successfully processed');

            return response()->json(['success' => true, 'message' => 'Payment intent succeeded']);
        }else{
            return response()->json(['success' => false, 'message' => 'Payment intent not succeeded']);
        }
    }

    protected function send_order_success_email($user)
    {
        Mail::to($user->email)
            ->send(new OrderSuccessEmail($user));
    }


}
