<?php

namespace App\Http\Controllers;

use App\Models\Contenu;
use Illuminate\Http\Request;

class ContenuController extends Controller
{
    public function index(){
        return view('admin.pages.contenu.index');
    }
    public function updatesite(){
        $contenu  = Contenu::first();
        // dd($contenu);
        return view('admin.pages.contenu.updatedsite',compact('contenu'));
    }
    public function editsite(Contenu $id, Request $request){
        request()->validate([
            'titre_1' => ["required"],
            'titre_2' => ["required"],
            'titre_3' => ["required"],
            'titre_4' => ["required"],
            'titre_5' => ["required"],
            'titre_6' => ["required"],
            'titre_7' => ["required"],
            'description_1' => ["required"],
            'description_2' => ["required"],
            'description_3' => ["required"],
        ]);
            $contenu = Contenu::first();
            $contenu->titre_1 = $request->titre_1;
            $contenu->titre_2 = $request->titre_2;
            $contenu->titre_3 = $request->titre_3;
            $contenu->titre_4 = $request->titre_4;
            $contenu->titre_5 = $request->titre_5;
            $contenu->titre_6 = $request->titre_6;
            $contenu->titre_7 = $request->titre_7;
            $contenu->description_1 =$request->description_1;
            $contenu->description_2 =$request->description_2;
            $contenu->description_3 = $request->description_3;
            $contenu->contact_titre = $contenu->contact_titre;
            $contenu->contact_description = $contenu->contact_description;
            $contenu->contact_soustitre = $contenu->contact_soustitre;
            $contenu->contact_rue = $contenu->contact_rue;
            $contenu->contact_ville = $contenu->contact_ville;
            $contenu->contact_telephone = $contenu->contact_telephone;
            $contenu->contact_email = $contenu->contact_email;
            $contenu->save();
            return redirect()->route('contenu.index');
    }

    public function updatecontact(){
        $contenu  = Contenu::first();
        return view('admin.pages.contenu.updatecontact',compact('contenu'));
    }
    public function editcontact(Contenu $id, Request $request){
        request()->validate([
            'contact_titre' => ["required"],
            'contact_description' => ["required"],
            'contact_soustitre' => ["required"],
            'contact_rue' => ["required"],
            'contact_ville' => ["required"],
            'contact_email' => ["required"],
            'contact_telephone' => ["required"],
        ]);
            $contenu = Contenu::first();
            $contenu->titre_1 = $contenu->titre_1;
            $contenu->titre_2 = $contenu->titre_2;
            $contenu->titre_3 = $contenu->titre_3;
            $contenu->titre_4 = $contenu->titre_4;
            $contenu->titre_5 = $contenu->titre_5;
            $contenu->titre_6 = $contenu->titre_6;
            $contenu->titre_7 = $contenu->titre_7;
            $contenu->description_1 =$contenu->description_1;
            $contenu->description_2 =$contenu->description_2;
            $contenu->description_3 = $contenu->description_3;
            $contenu->contact_titre = $request->contact_titre;
            $contenu->contact_description = $request->contact_description;
            $contenu->contact_soustitre = $request->contact_soustitre;
            $contenu->contact_rue = $request->contact_rue;
            $contenu->contact_ville = $request->contact_ville;
            $contenu->contact_telephone = $request->contact_telephone;
            $contenu->contact_email = $request->contact_email;
            $contenu->save();
            return redirect()->route('contenu.index');
    }

}
