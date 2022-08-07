<x-base-layout>
    <x-slot name="qiita">
        <x-article-qiita :articles="$articles_qiita"></x-article-qiita>
    </x-slot>
    <x-slot name="zenn">
        <x-article-zenn :articles="$articles_zenn"></x-article-zenn>
    </x-slot>
</x-base-layout>
