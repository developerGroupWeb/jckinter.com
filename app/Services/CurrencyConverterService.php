<?php


namespace App\Services;


use Illuminate\Http\Request;

class CurrencyConverterService
{

    static function get_default_currency($request){

        $ip  = $request->ip();

        $arr_ip = geoip()->getLocation('188.166.151.34');
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
}
