<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index(){
        $testimonial = Testimonial::all();
        return view('admin.pages.testimonial.testimonial', compact('testimonial'));
    }
    public function create()
    {
        return view('admin.pages.testimonial.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'nom' => ["required"],
            'photo' => ["required"],
            'prenom' => ["required"],
            'poste' => ["required"],
            'avis' => ["required",'max:175'],
        ]);
        //STORAGE classique via input FILE
        $testimonial = new Testimonial();
        $request->file('photo')->storePublicly('image/', 'public');
        $testimonial->photo = $request->file('photo')->hashName();
        $testimonial->nom = $request->nom;
        $testimonial->prenom = $request->prenom;
        $testimonial->poste = $request->poste;
        $testimonial->avis = $request->avis;
        $testimonial->save();
        return redirect()->route('testimonial.index');
    }
    public function destroy(Testimonial $id)
    {
        Storage::disk('public')->delete('image/'. $id->photo);
        $id->delete();
        return redirect()->route('testimonial.index');
    }
    public function edit(Testimonial $id){
        $testimonial = $id;
        return view('admin.pages.testimonial.edit', compact('testimonial'));
    }
    public function update(Testimonial $id, Request $request){
            request()->validate([
                'nom' => ["required"],
                'photo' => ["required"],
                'prenom' => ["required"],
                'poste' => ["required"],
                'avis' => ["required",'max:175'],
            ]);
            $testimonial = $id;
            //STORAGE
            Storage::disk('public')->delete('image/'. $id->photo);
            $request->file('photo')->storePublicly('image/', 'public');
            $testimonial->photo = $request->file('photo')->hashName();
            $testimonial->nom = $request->nom;
            $testimonial->prenom = $request->prenom;
            $testimonial->poste = $request->poste;
            $testimonial->avis = $request->avis;
            $testimonial->save();
                return redirect()->route('testimonial.index');
    }

}
