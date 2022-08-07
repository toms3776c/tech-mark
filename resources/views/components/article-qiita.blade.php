@foreach ($articles as $res_data)
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
