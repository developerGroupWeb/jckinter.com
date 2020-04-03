<?php


namespace App\Services;


use App\Models\OrderCurrency;
use Illuminate\Http\Request;

class CurrencyConverterService
{

    /**
     * @param $request
     * @return array
     */
    static function get_default_currency($request){

        $ip  = $request->ip();

        $arr_ip = geoip()->getLocation($ip);
        $currency = $arr_ip['currency'];

        $currencies = [
            'USD' => 'USD',
            'EUR' => 'EUR',
            'CAD' => 'CAD',
            'AUD' => 'AUD',
            'GBP' => 'GBP',
            'INR' => 'INR',
            'CNY' => 'CNY',
        ];
        $default_currency = [
            'USD' => 'USD',
            'EUR' => 'EUR',
        ];
        return $currency = ((in_array($currency, $currencies)) ? [$currency => $currency] : $default_currency);
    }

    static function get_summary($request){

        return [
                  'track_order' => OrderCurrency::getTrackOrder(),
                  'amount_send'    => $request->get('amount_send'),
                  'amount_receive' => $request->get('amount_receive'),
                  'exchange'       => $request->get('exchange'),
                  'devise_send'    => $request->get('devise_send'),
                  'devise_receive' => 'XOF',
                  'country'        => $request->get('country'),
                  'fees'           => $request->get('fees'),
                  'total'          => $request->get('total'),

        ];
    }
}
