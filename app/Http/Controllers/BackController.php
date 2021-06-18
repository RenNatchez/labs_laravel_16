<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Poste;
use App\Models\User;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function dashboard()
    {
        $poste = Poste::all();
        $blog = blog::all()->where('validate',1)->where('delete',0);
        $membre = User::all()->where('validate',1);
        return view('admin.dashboard',compact('poste','blog','membre'));
    }

}
