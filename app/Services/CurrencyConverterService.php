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

        $arr_ip = geoip()->getLocation('69.9.238.22');
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

        $amount_send     = $request->get('amount_send');
        $exchange        = $request->get('exchange');
        $devise_send     = $request->get('devise_send');
        $country         = $request->get('country');

        $amount_receive  = $amount_send * $exchange;
        $fees           = 5;
        $total           = $amount_send + $fees;

        return [
                  'track_order' => OrderCurrency::getTrackOrder(),
                  'amount_send'    => $amount_send,
                  'amount_receive' => $amount_receive,
                  'exchange'       => $exchange,
                  'devise_send'    => $devise_send,
                  'devise_receive' => 'XOF',
                  'country'        => $country,
                  'fees'           => $fees,
                  'total'          => $total,

        ];
    }
}
