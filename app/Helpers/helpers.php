<?php

use App\Models\Admin\StatusOrder;

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

if(!function_exists('check_status')){

    function check_status($track_order){
        $status = StatusOrder::get_status($track_order);

        $bg_colors = [
            "prepared" => "bg-warning",
            "pending" => "bg-warning",
            "completed" => "bg-success",
            "on the way" => "bg-primary"
        ];
       if(!$status){
           $status = "pending";
       }
        return "<i class='$bg_colors[$status]'></i>$status<span class=\"status\"></span>";
    }
}
