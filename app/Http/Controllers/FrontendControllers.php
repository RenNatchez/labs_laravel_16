<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Icone;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontendControllers extends Controller
{
    public function home()
    {
        $carousels = Carousel::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $video = Video::first();
        $testi_last = $testimonials->sortByDesc('created_at')->take(6);
        $serv_random = $services->random(3);
        $serv_random2 = $services->random(9);
        return view('home',compact('carousels','serv_random','video','serv_random2','testi_last'));
    }

}
