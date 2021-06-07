<div class="services-section">
    <div class="container">
        <div class="section-title dark">
            <h2>Get in <span>the Lab</span> and see the services</h2>
        </div>
        <div class="row">
            @forelse ($serv_page as $serv)
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
            <div class="text-center">
                {{ $serv_page->links("pagination::bootstrap-4") }}
            </div>            
        </div>
    </div>
</div>