<?php

namespace App\Http\Controllers;

use App\Models\Icone;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $count= Service::all()->count();
        $service = Service::all();
        return view('admin.pages.services.service', compact('service','count'));
    }
    public function create()
    {
        $icone = Icone::all();
        return view('admin.pages.services.create',compact('icone'));
    }
    public function edit(Service $id){
        $service = $id;
        $icone = Icone::all();
        return view('admin.pages.services.edit', compact('service','icone'));
    }
    public function destroy(Service $id) {
        // dd($id);
        $id->delete();
        return redirect()->back();
    }
    public function store(Request $request)
    {
        request()->validate([
            'titre' => ["required"],
            'description' => ["required"],
            'icone_id' => ["required"],
        ]);

        //STORAGE classique via input FILE
        $service = new Service();
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->icone_id = $request->icone_id;
        $service->save();
        return redirect()->route('service.index');
    }
    public function update(Service $id, Request $request){
        request()->validate([
            'titre' => ["required"],
            'description' => ["required"],
            'icone_id' => ["required"],
        ]);

        $service = $id;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->icone_id = $request->icone_id;
        $service->save();
        return redirect()->route('service.index');
    }
}
