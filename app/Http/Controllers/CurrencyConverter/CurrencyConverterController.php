<?php

namespace App\Http\Controllers\CurrencyConverter;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeCurrencyRequestForm;
use App\Models\OrderCurrency;
use App\Services\CurrencyConverterService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CurrencyConverterController extends Controller
{

    /**
     * @param Request $request
     * @return Factory|View
     */
    function index(Request $request){

        $default_currency = CurrencyConverterService::get_default_currency($request);

        return view('currencyconverter.welcome',[
            'default_currency' => $default_currency
        ]);
    }


    /**
     * @param storeCurrencyRequestForm $requestForm
     * @return RedirectResponse
     */
    function store(storeCurrencyRequestForm $requestForm){

        $summary =  CurrencyConverterService::get_summary($requestForm);

        $user_id = Session::get('currency_user')['id'];

        $order_exist = OrderCurrency::whereUser_id($user_id)->whereStatus(false)->first();

        if($order_exist){
            return redirect()->route('checkout.index')->with('order_exist', 'You already have an unpaid order in progress');
        }


        $order  = OrderCurrency::create([
            'user_id'        => $user_id,
            'amount_receive' => $summary['amount_receive'],
            'devise_receive' => $summary['devise_receive'],
            'devise_send'    => $summary['devise_send'],
            'amount_send'    => $summary['amount_send'],
            'total'          => $summary['total'],
            'country'        => $summary['country'],
            'fees'           => $summary['fees']
        ]);

        if($order){

            return redirect()->route('checkout.index');
        }

    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    function destroy($id){

        OrderCurrency::destroy($id);
        return redirect()->route('currencyconverter.index')->with('delete', 'Your order has been deleted');

    }

}
