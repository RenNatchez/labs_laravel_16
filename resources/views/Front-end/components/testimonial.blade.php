<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>{!!$titre2!!}</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    @forelse ($testi_last as $testi)
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>{{$testi->avis}}</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="{{asset('image/'. $testi->photo)}}" alt="photo_id">
                            </div>
                            <div class="client-name">
                                <h2>{{$testi->prenom}} {{$testi->nom}}</h2>
                                <p>{{$testi->poste}}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                        
                    @endforelse
                    <!-- single testimonial -->
                </div>
            </div>
        </div>
    </div>
</div>
