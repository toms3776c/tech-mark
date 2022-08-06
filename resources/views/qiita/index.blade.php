<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <title>Articles</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-Notosans">
    <div class="container mx-auto bg-base-200 flex-column h-100">
        <header>
            <div class="navbar bg-primary ">
                <div class="flex-1">
                    <span class="text-3xl ml-4 font-bold">技術サイトブックマーク（仮）</span>
                </div>
                <div class="flex-none">
                    <ul class="menu menu-horizontal p-0">
                        <li><a href="#">ログイン</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <main class="flex-1">
            <h1 class="text-3xl font-bold text-blue-600 text-center m-4">最新記事</h1>
            @foreach ($decode_res as $res_data)
                <div class="card m-4 w-3/4 bg-base-100 mx-auto shadow-lg">
                    <div class="card-body">
                        <h2 class="card=title text-xl">{{ $res_data->title }}</h2>
                        <div class="flex">
                            @foreach ($res_data->tags as $tag)
                                <div class="badge badge-secondary m-1">{{ $tag->name }}</div>
                            @endforeach
                        </div>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="{{ $res_data->url }}" target="_blank">公開サイトへ</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </main>
    </div>
</body>
</html>
