<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.pages.contact.contact', compact('contacts'));
    }
    public function destroy(Contact $id)
    {
        $id->delete();
        return redirect()->route('contact.index');
    }

}
