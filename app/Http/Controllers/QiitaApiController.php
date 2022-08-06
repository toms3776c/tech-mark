<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class QiitaApiController extends Controller
{
    public function index()
    {
        $decode_res = $this->getQiitaItems();
        // dd($decode_res);
        return view('qiita.index', compact('decode_res'));
    }

    private function getQiitaItems()
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
