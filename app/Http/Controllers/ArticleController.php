<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\QiitaApiService;
use App\Services\ZennApiService;

class ArticleController extends Controller
{
    private $qiita_api;
    private $zenn_api;
    public function __construct(QiitaApiService $qiita_api_service, ZennApiService $zenn_api_service)
    {
        $this->qiita_api = $qiita_api_service;
        $this->zenn_api = $zenn_api_service;
    }

    public function index()
    {
        $decode_res_qiita = $this->qiita_api->getItems();
        $decode_res_zenn = $this->zenn_api->getItems();

        return view('article.index',
            [
                'articles_qiita' => $decode_res_qiita,
                'articles_zenn' => $decode_res_zenn,
            ]
        );
    }
}
