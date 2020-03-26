<?php

if(!function_exists('format_amount_send')){

    function format_amount_send($amount_send){

        $amount_send = $amount_send * 100;

        return number_format(floatval($amount_send), 2, ',', ' ');
    }
}


if(!function_exists('flash_message')){

    /**
     * @param $key
     * @param $alert
     * @return string
     */
    function flash_message($key, $alert){

        $msg = "";
        if(session()->has($key)){

            $msg = "<div class='alert $alert'>";
            $msg .=  session($key);
            $msg .=  " </div>";
        }
        return  $msg;
    }
}
