<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(){
        $newsletter = Newsletter::all();
        return view('admin.pages.newsletter.newsletter', compact('newsletter'));
    }
    public function destroy(Newsletter $id)
    {
        $id->delete();
        return redirect()->route('newsletter.index');
    }

}
