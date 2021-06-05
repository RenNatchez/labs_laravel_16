<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Database\Seeders\CarouselSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index(){
        $count= Carousel::all()->count();
        $carousels = Carousel::all();
        return view('admin.pages.carousel.carousel', compact('carousels','count'));
    }
    public function create()
    {
        return view('admin.pages.carousel.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'image' => ["required"],
            'texte' => ["required"],
        ]);

        //STORAGE classique via input FILE
        $carousel = new Carousel();
        $request->file('image')->storePublicly('image/', 'public');
        $carousel->image = $request->file('image')->hashName();
        $carousel->texte = $request->texte;
        $carousel->start = false;
        $carousel->save();
        return redirect()->route('carousel.index');
    }
    public function destroy(Carousel $id)
    {
        Storage::disk('public')->delete('image/'. $id->image);
        $id->delete();
        return redirect()->route('carousel.index');
    }
    public function edit(Carousel $id){
        $carousel = $id;
        return view('admin.pages.carousel.edit', compact('carousel'));
    }

    public function update(Carousel $id, Request $request){
        request()->validate([
            'image' => ["required"],
            'texte' => ["required"],
        ]);
        $carousel = $id;
            //STORAGE
            Storage::disk('public')->delete('image/'. $id->image);
            $request->file('image')->storePublicly('image/', 'public');
            $carousel->image = $request->file('image')->hashName();
                //DB
            $carousel->image = $request->file('image')->hashName();
            $carousel->texte = $request->texte;
            if ($request->start ==1) {
                $carousel->start =  $request->start;
            } else {
                $carousel->start = 0;
            }
            $carousel->save();
            return redirect()->route('carousel.index');
    }


}
