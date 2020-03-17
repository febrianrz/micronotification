<?php

namespace Febrianrz\Micronotification;

use GuzzleHttp\Client;

class Notif {

    public static function send($emails,$user_id, $option)
    {
        if(!is_array($option)) dd("Option harus berupa array");
        if(!isset($option['subject'])) dd("Option subject wajib diisi");
        if(!isset($option['body'])) dd("Option body wajib diisi");

        $auth_url = config('micro')['url']['notification'];
        $client = new Client([
            'base_uri'  => $auth_url,
            'timeout'   => 2.0
        ]);
        $channel['email'] = is_array($emails)?$emails:[$emails];
        if($user_id != null){
            $channel['web'] = [$user_id];
        }
        
        $response = $client->request('POST', '/api/v1/send', [
            'headers' => ['Accept' => 'application/json'],
            'form_params'     => [
                'app_id'    => config('micro')['app']['id'],
                'app_secret'    => config('micro')['app']['secret'],
                'channel'   => $channel,
                'subject'   => $option['subject'],
                'body'      => $option['body']
            ]
        ]);
        
        if($response->getStatusCode() == 200) return true;
        return false;
    }

}