<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Icone;
use Illuminate\Http\Request;

class FrontendControllers extends Controller
{
    public function home()
    {
        $carousels = Carousel::all();
        return view('home',compact('carousels'));
    }

}
