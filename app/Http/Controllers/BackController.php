<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function dashboard()
    {
        $poste = Poste::all();
        return view('admin.dashboard',compact('poste'));
    }

}
