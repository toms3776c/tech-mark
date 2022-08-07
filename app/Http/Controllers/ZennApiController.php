<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ZennApiService;

class ZennApiController extends Controller
{
    private $zenn_api;
    public function __construct(ZennApiService $zenn_api_service)
    {
        $this->zenn_api = $zenn_api_service;
    }

    public function index()
    {
        $decode_res = $this->zenn_api->getItems();
        // dd($decode_res);
        return view('zenn.index', compact('decode_res'), ['base_url' => ZennApiService::BASE_URL]);
    }
}
