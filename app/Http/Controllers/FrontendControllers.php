<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use App\Models\Carousel;
use App\Models\Contact;
use App\Models\Icone;
use App\Models\Service;
use App\Models\Subject;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendControllers extends Controller
{
    public function home()
    {
        $currentpage = 'Home';
        $carousels = Carousel::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $video = Video::first();
        $subjects = Subject::all();
        $testi_last = $testimonials->sortByDesc('created_at')->take(6);
        $serv_random = $services->random(3);
        $serv_random2 = $services->random(9);
        return view('home',compact('carousels','serv_random','video','currentpage','serv_random2','testi_last','subjects'));
    }
    public function services()
    {
        $currentpage = 'Services';
        $services = Service::all();
        $serv_page = Service::paginate(4);
        $serv_random = $serv_page->random(4);
        return view('front-end.pages.services',compact('services','serv_random','currentpage'));
    }
    public function mailling (Request $request)
    {
        //welcome inscription - to dynamique
        Mail::to($request->mail)->send(new MailSender($request));

        //formulaire de contact - to défini
        // Mail::to('info@labs.com')->send(new MailSender($request));
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->mail = $request->mail;
        $contact->subject_id = $request->subject_id;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back();
    }

}
