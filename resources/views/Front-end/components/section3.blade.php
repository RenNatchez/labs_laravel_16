<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{!!$titre4!!}</h2>
        </div>
        <div class="row">
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member w-memb-card">
                    <img src="{{asset('image/'.$user_random[0]->photo)}}" alt="">
                    <div>
                        <h2>{{$user_random[0]->nom}} {{$user_random[0]->prenom}}</h2>
                        <h3>{{$user_random[0]->poste->nom}}</h3>
                    </div>
                </div>
            </div>
            <!-- single member -->
            @if ($centre == null)
            <div class="col-sm-4">
                <div class="member w-memb-card">
                    <img src="{{asset('image/user1.png')}}" alt="">
                    <div>
                        <h2></h2>
                        <h3>Ceo</h3>
                    </div>
                </div>
            </div>
            @else
            <div class="col-sm-4">
                <div class="member w-memb-card">
                    <img src="{{asset('image/'.$centre[0]->photo)}}" alt="">
                    <div>
                        <h2>{{$centre[0]->nom}} {{$user_random[0]->prenom}}</h2>
                        <h3>{{$centre[0]->poste->nom}}</h3>
                    </div>
                </div>
            </div>
            @endif
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member w-memb-card">
                    <img src="{{asset('image/'.$user_random[1]->photo)}}" alt="">
                    <div>
                        <h2>{{$user_random[1]->nom}} {{$user_random[1]->prenom}}</h2>
                        <h3>{{$user_random[1]->poste->nom}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="promotion-section">
    <div class="container bg-red-800">
        <div class="row">
            <div class="col-md-9">
                <h2>{!!$titre5!!}</h2>
                <p>{{$contenu->description_3}}</p>
            </div>
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="{{route('contact')}}" class="site-btn btn-2">Browse</a>
                </div>
            </div>
        </div>
    </div>
</div>
