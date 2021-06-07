<?php

namespace App\Http\Controllers;

use App\Models\Googlemaps;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GooglemapsController extends Controller
{
    public function index(){
        $maps = Googlemaps::first();
        return view('admin.pages.googlemaps.googlemaps', compact('maps'));
    }
    public function edit(Googlemaps $id){
        $maps = $id;
        return view('admin.pages.googlemaps.edit', compact('maps',));
    }
    public function update(Googlemaps $id, Request $request){
        request()->validate([
            'coordonees' => ["required"],
        ]);
        $coordonees  =  $request->coordonees;
        $latitude = Str::after($coordonees, ', ');
        $longitude = Str::before($coordonees, ', ');
        $maps = $id;
        $maps->latitude = $latitude;
        $maps->longitude = $longitude;
        $maps->save();
        return redirect()->route('googlemaps.index');
    }
}
