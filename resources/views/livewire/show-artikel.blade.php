<div>
    <img src="{{Storage::url($article->thumbnail)}}" alt="">
    <article class="prose">
        @markdown
        {!! $article->content !!}
        @endmarkdown
    </article>
</div>
