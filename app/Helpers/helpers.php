<?php

if(!function_exists('format_amount_send')){

    function format_amount_send($amount_send){

        $amount_send = $amount_send * 100;

        return number_format(floatval($amount_send), 2, ',', ' ');
    }
}
