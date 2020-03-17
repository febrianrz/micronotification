<?php

namespace Febrianrz\Micronotification;

use GuzzleHttp\Client;

class Notif {

    public static function send($to,$option)
    {
        $auth_url = config('micro')['url']['notification'];
        // dd($auth_url);
        $client = new Client([
            'base_uri'  => $auth_url,
            'timeout'   => 2.0
        ]);
        $response = $client->request('POST', '/api/v1/send', [
            'form_params'     => [
                'app_id'    => config('micro')['app']['id'],
                'app_secret'    => config('micro')['app']['id'],
            ]
        ]);
        dd($response->getStatusCode());
        // if($response->getStatusCode() == 200){
        //     dd("berhasil");
        // } 
        // dd("gagal");
    }

}