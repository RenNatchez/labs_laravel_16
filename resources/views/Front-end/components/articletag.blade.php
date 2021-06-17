@foreach ($blog as $item)
<!-- Post item -->
<div class="post-item">
    <div class="post-thumbnail">
        <img src="{{asset('img/blog/'. $article->photo)}}" alt="">
        <div class="post-date">
            {{-- $date --}}
            <h2>{{$article->created_at->format('d')}}</h2>
            <h3>{{$article->created_at->format('M - y')}}</h3>
        </div>
    </div>
    <div class="post-content">
        <h2 class="post-title">{{$article->titre}}</h2>
        <div class="post-meta">
            {{-- $categorie --}}
            <a href="">{{$article->categorie->nom}}</a>
            {{-- tags --}}
            <a href="">
                @foreach ($article->tags as $tag)
                <span href="">{{$tag->nom}},</span>    
                @endforeach
            </a>
            {{-- comments --}}                
            <a href="">{{$article->commentaires->where('validate', 1)->count()}} comments</a>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.</p>
        {{-- show front --}}
        <a href="{{route('showArticle', $article->id)}}" class="read-more">Read More</a>
    </div>
</div>
@endforeach
        <a href="">{{count($item->comments->where('valide',1))}} Comments</a>
    </div>
    <p>{{Str::limit($item->contenu, 280, '...') }}</p>
    <a href="{{route('blog.show', $item->id)}}" class="read-more">Read More</a>
</div>
</div>
<div class="text-center">
    {{ $blog->links("pagination::bootstrap-4") }}
</div>
