<div>
    <img src="{{Storage::url($article->thumbnail)}}" alt="">
    <article>
        <x-markdown>
            {!! $article->content !!}
        </x-markdown>
    </article>
</div>
