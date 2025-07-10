<?php

    function dd($value){
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
    }

    function urlIs($value){
        return $_SERVER['REQUEST_URI'] === $value;
    }

    function sms_send($sms_number,$message) {
        
        $url = "http://bulksmsbd.net/api/smsapi";
        $api_key = "Kdan9bcjkwFAPLHNyaBR";
        $senderid = "8809617624990";
     
        $data = [
            "api_key" => $api_key,
            "senderid" => $senderid,
            "number" => $sms_number,
            "message" => $message
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    function get_balance() {
        $url = "http://bulksmsbd.net/api/getBalanceApi";
        $api_key = "Kdan9bcjkwFAPLHNyaBR";
        $data = [
            "api_key" => $api_key
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        $balance = json_decode($response);
        echo $balance->balance;
    }
        
?>