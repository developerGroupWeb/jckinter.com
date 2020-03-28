<?php


namespace App\Services;


use GuzzleHttp\Client;

class CallApiService
{
    protected  static $key = "1f1dcfe67096815e09d3b89d3373400d";

    static function getData($from, $to, $amount){

        $client   = new Client;
        $url      = sprintf("http://data.fixer.io/api/convert?access_key=%s&from=%s&to=%s&amount=%s", self::$key, $from, $to, $amount);
        $response = $client->get($url);

        return json_decode((string)$response->getBody(), true);
    }
}
