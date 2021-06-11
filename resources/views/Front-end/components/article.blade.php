@foreach ($blog as $item)
    <!-- Post item -->
    <div class="post-item">
        <div class="post-thumbnail">
            <img src='{{ asset('image/blog/'.$item->image) }}' alt="">
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
                <a href="">{{count($item->comments)}} Comments</a>
            </div>
            <p>{{Str::limit($item->contenu, 280, '...') }}</p>
            <a href="{{route('blog.show', $item->id)}}" class="read-more">Read More</a>
        </div>
    </div>
@endforeach
<div  class="text-center">
    {{ $blog->links("pagination::bootstrap-4") }}
</div>

