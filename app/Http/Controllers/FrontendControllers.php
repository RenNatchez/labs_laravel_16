<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Icone;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendControllers extends Controller
{
    public function home()
    {
        $carousels = Carousel::all();
        $services = Service::all();
        $serv_random = $services->random(3);
        return view('home',compact('carousels','serv_random'));
    }

}