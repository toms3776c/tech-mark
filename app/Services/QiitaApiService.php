<?php

namespace App\Services;

use GuzzleHttp\Client;

class QiitaApiService
{

    public function getItems()
    {
        $client = new Client();
        $token = config('qiita.auth_id');
        $result = $client->request('GET', 'https://qiita.com/api/v2/items?page=1&per_page=10', [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
            ],
        ]);
        $response_body = (string) $result->getBody();
        return json_decode($response_body);
    }
}
