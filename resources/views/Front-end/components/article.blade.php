@foreach ($blog as $item)
    <!-- Post item -->
    <div class="post-item">
        <div class="post-thumbnail">
            <img src="img/blog/blog-2.jpg" alt="">
            <div class="post-date">
                <h2>{{$item->created_at->format('d')}}</h2>
                <h3>{{$item->created_at->format('m')}}, {{$item->created_at->format('y')}}</h3>
            </div>
        </div>
        <div class="post-content">
            <h2 class="post-title">{{$item->titre}}</h2>
            <div class="post-meta">
                <a href="">{{$item->categorie->nom}}</a>
                @foreach ($item->tags as $tag)
                <a href="">{{$tag->nom}}</a>
                @endforeach
                <a href="">2 Comments</a>
            </div>
            <p>{{Str::limit($item->contenu, 280, '...') }}</p>
            <a href="blog-post.html" class="read-more">Read More</a>
        </div>
    </div>
@endforeach
<div  class="text-center">
    {{ $blog->links("pagination::bootstrap-4") }}
</div>

