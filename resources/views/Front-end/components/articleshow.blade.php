<div class="single-post">
    <div class="post-thumbnail">
        <img src='{{ asset('image/blog/'.$article->image) }}' alt="">
        <div class="post-date">
            <h2>{{$article->created_at->format('d')}}</h2>
            <h3>{{$article->created_at->format('m')}}, {{$article->created_at->format('y')}}</h3>
        </div>
</div>
    <div class="post-content">
        <h2 class="post-title">{{$article->titre}}</h2>
        <div class="post-meta">
            <a href="">{{$article->categorie->nom}}</a>
            @foreach ($article->tags as $tag)
            <a href="">{{$tag->nom}}</a>
            @endforeach
            <a href="">{{count($article->comments)}} Comments</a>
        </div>
        <p>{{$article->contenu}}</p>
    </div>
    <!-- Post Author -->
    <div class="author">
        <div class="avatar">
            <img width="200" src="{{ asset('image/'.$article->user->photo) }}" alt="">
        </div>
        <div class="author-info">
            <h2>{{$article->user->nom}} {{$article->user->prenom}}, <span>{{$article->user->poste->nom}}</span></h2>
            <p>{{$article->user->description}}</p>
        </div>
    </div>
    <!-- Post Comments -->
    <div class="comments">
        <h2>Comments ({{count($article->comments)}})</h2>
        <ul class="comment-list">
            @foreach ($article->comments as $comment)
            <li>
                <div class="avatar">
                </div>
                <div class="commetn-text">
                    <h3>{{$comment->auteur}} | {{$comment->created_at->format('d')}} {{$comment->created_at->format('m')}}, {{$comment->created_at->format('y')}}</h3>
                    <p>{{$comment->message}}</p>
                </div>
            </li>
        </ul>
        @endforeach
    </div>
    <!-- Commert Form -->
    @include('Front-end.components.formcomment')
</div>
