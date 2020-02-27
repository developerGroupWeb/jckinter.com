<?php

namespace App\Http\Controllers\checkout;

use App\Http\Controllers\Controller;
use App\Models\OrderCurrency;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
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
     * @throws ApiErrorException
     */
    public function index()
    {
        $order = OrderCurrency::whereUser_id( 1)->whereStatus(false)->first();


        if(!$order){
            return redirect()->route('currencyconverter.index');
        }

        Stripe::setApiKey('sk_test_l8dRncid0zKE6ZLVkBYzHq8800xiQKkVLr');

        $intent = PaymentIntent::create([
            'amount' => $order->total * 100,
            'currency' => strtolower($order->devise_send),
        ]);

        $client_secret = Arr::get($intent, 'client_secret');

        return view('checkout.index', [
            'order' => $order,
            'client_secret' => $client_secret,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $data = $request->json()->all();



        if($data['paymentIntent']['status'] === "succeeded"){

           OrderCurrency::whereUser_id(1)->update([

               'payment_intent_id' => $data['paymentIntent']['id'],
               'payment_created_at' => (new \DateTime())
                   ->setTimestamp($data['paymentIntent']['created'])
                   ->format('Y-m-d H:i:s'),

               'status' => true
           ]);

            Session::flash('thanks', 'Your order has been successfully processed');

            return response()->json(['success' => 'Payment intent succeeded']);
        }else{
            return response()->json(['error' => 'Payment intent not succeeded']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
