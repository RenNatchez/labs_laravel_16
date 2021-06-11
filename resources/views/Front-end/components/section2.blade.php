<div class="services-section spad"  id="ancre">
    <div class="container">
        <div class="section-title dark">
            <h2>{!!$titre3!!}</h2>
        </div>
        <div class="row">
            @forelse ($serv_random2 as $serv)
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{$serv->icone->class}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{ $serv->titre }}</h2>
                        <p>{{ $serv->description }}</p>
                    </div>
                </div>
            </div>
            @empty
                <h1>Aucun service a afficher</h1>
            @endforelse
        </div>
        <div class="text-center">
            <a href="{{route('services')}}" class="site-btn">Ready</a>
        </div>
    </div>
</div>
