<?php

namespace App\Helpers\Api;

class Colfuturo
{
    public static function get($url)
    {
        $ch = curl_init(); '';

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        $headers = array();
        $headers[] = 'Auth-Key: c5Y6RcmExHH5sq5YNXV31gKO3jd5SyBDbxDSnEQl';

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return json_decode($result);
    }
}