<?php

namespace App\Http\Controllers\CurrencyConverter;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreCurrencyFormRequest;
use App\Models\OrderCurrency;
use App\Models\User;
use App\Services\CallApiService;
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

        return view(app()->getLocale().'.currencyconverter.welcome',[
            'default_currency' => $default_currency
        ]);
    }


    /**
     * @param StoreCurrencyFormRequest $requestForm
     * @return RedirectResponse
     */
    function store(StoreCurrencyFormRequest $requestForm){

        $summary =  CurrencyConverterService::get_summary($requestForm);

        $user_id = Session::get('currency_user')['id'];

        $order_exist = OrderCurrency::whereUser_id($user_id)->whereStatus(false)->first();

        if($order_exist){
            return redirect()->route('dashboard.index', ['language' => app()->getLocale(), Session::get('currency_user')['full_name']])->with('order_exist', 'You already have an unpaid order in progress');
        }

        $user  = User::findOrFail($user_id);

        $order  = $user->order_currencies()->create($summary);

        if($order){

            return redirect()->route('dashboard.index', ['language' => app()->getLocale(), Session::get('currency_user')['full_name']]);
        }

    }

    function get_currency_data(Request $request){

        $data = CallApiService::getData($request->devise_send, "XOF", $request->amount_send);

        $fee = CallApiService::getData("USD", $request->devise_send, 5);


        if($data['success']){

            return response()->json(['success' => true, 'rate' => $data['info']['rate'], 'result' => $data['result'], 'fee' => $fee['result']]);
        }
        return response()->json(['success' => false, 'message' => 'Please, check again!']);
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    function destroy($id){

        OrderCurrency::destroy($id);

        session()->forget('fake_order');

        return redirect()->route('home.index', ['language' => app()->getLocale()])->with('delete', 'Your order has been deleted');

    }


    /**
     * @return Factory|RedirectResponse|View
     */
    function thanks(){

        return (Session::has('thanks')) ? view(app()->getLocale().'.currencyconverter.thanks') : redirect()->route('currencyconverter.index', ['language' => app()->getLocale()]);
    }

}
