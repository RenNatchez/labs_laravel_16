<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        $articles = blog::all();
        return view('admin.pages.articles.articles', compact('articles'));
    }
    public function create()
    {
        $categorie = Categorie::all();
        return view('admin.pages.articles.create',compact('categorie'));
    }
    // public function edit(Blog $id){
    //     $service = $id;
    //     $icone = Icone::all();
    //     return view('admin.pages.services.edit', compact('service','icone'));
    // // }
    public function destroy(Blog $id) {
        // dd($id);
        $id->delete();
        return redirect()->back();
    }
    // public function store(Request $request)
    // {
    //     request()->validate([
    //         'titre' => ["required"],
    //         'description' => ["required"],
    //         'icone_id' => ["required"],
    //     ]);

    //     //STORAGE classique via input FILE
    //     $service = new Service();
    //     $service->titre = $request->titre;
    //     $service->description = $request->description;
    //     $service->icone_id = $request->icone_id;
    //     $service->save();
    //     return redirect()->route('service.index');
    // }
    // public function update(Service $id, Request $request){
    //     request()->validate([
    //         'titre' => ["required"],
    //         'description' => ["required"],
    //         'icone_id' => ["required"],
    //     ]);

    //     $service = $id;
    //     $service->titre = $request->titre;
    //     $service->description = $request->description;
    //     $service->icone_id = $request->icone_id;
    //     $service->save();
    //     return redirect()->route('service.index');
    // }

}
