<div class="card card-compact w-96 bg-base-100 shadow-xl">
    <figure><img src="{{Storage::url($article->thumbnail)}}" alt="Shoes" /></figure>
    <div class="card-body">
        <h2 class="card-title">{{$article->title}}</h2>
        <p>{!!Illuminate\Support\Str::limit($article->content,40)!!}</p>
        <div class="card-actions justify-end">
            <a href="{{ route('show.artikel', $article->slug) }}" class="btn btn-primary">Read more</a>
        </div>
    </div>
</div>
