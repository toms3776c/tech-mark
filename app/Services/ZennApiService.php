<?php

namespace App\Services;

use GuzzleHttp\Client;

class ZennApiService
{
    const BASE_URL = 'https://zenn.dev';

    public function getItems()
    {
        $client = new Client();
        // https://zenn-api.vercel.app/　よりAPIを借りている
        $result = $client->request('GET', 'https://zenn-api.vercel.app/api/trendTech', [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);
        $response_body = (string) $result->getBody();
        return json_decode($response_body);
    }
}
