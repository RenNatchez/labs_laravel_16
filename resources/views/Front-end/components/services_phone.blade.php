<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{!!$titre7!!}</h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features flex_phone">
                @foreach ($serv_random as $serv)
                <div class="icon-box light left icon_phone">
                    <div class="service-text">
                        <h2>{{$serv->titre}}</h2>
                        <p>{{$serv->description}}</p>
                    </div>
                    <div class="icon">
                        <i class="{{$serv->icone->class}}"></i>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices" >
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features flex_phone ">
                @foreach ($serv_random2 as $serv)
                <div class="icon-box light icon_phone">
                    <div class="icon">
                        <i class="{{$serv->icone->class}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$serv->titre}}</h2>
                        <p>{{$serv->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>

