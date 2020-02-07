<?php

namespace JarrettAndLam\Overwatch;

class Overwatch
{
    public function error($message)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://notifications.jarrettandlam.com/error");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['website' => request()->getHttpHost(), 'notification' => $message, 'error_type_id' => 1]));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
    }
}