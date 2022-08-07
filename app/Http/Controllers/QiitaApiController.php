<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\QiitaApiService;

class QiitaApiController extends Controller
{
    private $qiita_api;
    public function __construct(QiitaApiService $qiita_api_service)
    {
        $this->qiita_api = $qiita_api_service;
    }

    public function index()
    {
        $decode_res = $this->qiita_api->getItems();
        // dd($decode_res);
        return view('qiita.index', compact('decode_res'));
    }
}
