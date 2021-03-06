<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use App\Mail\NewsletterSender;
use App\Models\blog;
use App\Models\Blogcomment;
use App\Models\Carousel;
use App\Models\Categorie;
use App\Models\Comments;
use App\Models\Contact;
use App\Models\Contenu;
use App\Models\Googlemaps;
use App\Models\Icone;
use App\Models\Newsletter;
use App\Models\Service;
use App\Models\Subject;
use App\Models\Tag;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Str;
use Database\Seeders\NewsletterSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class FrontendControllers extends Controller
{
    // page home
    public function home()
    {
        $currentpage = 'Home';
        $contenu = Contenu::first();
        $footer_text = $contenu->footer_text;
        $footer_link = $contenu->footer_link;
        $footer_lien = $contenu->footer_lien;
        $parenthese = ['(',')'];
        $span = ['<span>','</span>'];
        $titre_1 = $contenu->titre_1;
        $titre_2 = $contenu->titre_2;
        $titre_3 = $contenu->titre_3;
        $titre_4 = $contenu->titre_4;
        $titre_5 = $contenu->titre_5;
        $titre1  = str_ireplace($parenthese,$span, $titre_1);
        $titre2  = str_replace($parenthese,$span, $titre_2);
        $titre3  = str_replace($parenthese,$span, $titre_3);
        $titre4  = str_replace($parenthese,$span, $titre_4);
        $titre5  = str_replace($parenthese,$span, $titre_5);
        $user = User::where('poste_id','>', '1')->where('validate',1)->get();
        $carousels = Carousel::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $video = Video::first();
        $subjects = Subject::all();
        $testi_last = $testimonials->sortByDesc('created_at')->take(6);
        $serv_random = $services->random(3);
        $serv_random2 = $services->random(9);
        $user_random = $user->random(2);
        $ceo = User::where('poste_id', '1')->get();
        $ceo_count = $ceo->count();
        if ($ceo_count == 0) {
            $centre = null;
        } else {
            $centre = $ceo->random(1);
        };
    
        return view('home',compact('footer_lien','footer_link','footer_text','contenu','titre1','titre2','titre3','titre4','titre5','centre','user_random','ceo','carousels','serv_random','video','currentpage','serv_random2','testi_last','subjects'));
    }
    public function mailling (Request $request)
    {
        //welcome inscription - to dynamique
        Mail::to($request->mail)->send(new MailSender($request));

        //formulaire de contact - to d??fini
        // Mail::to('info@labs.com')->send(new MailSender($request));
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->mail = $request->mail;
        $contact->subject_id = $request->subject_id;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back();
    }
    // page services
    public function services()
    {
    
        $currentpage = 'Services';
        $contenu = Contenu::first();
        $footer_text = $contenu->footer_text;
        $footer_link = $contenu->footer_link;
        $footer_lien = $contenu->footer_lien;
        $parenthese = ['(',')'];
        $span = ['<span>','</span>'];
        $titre_6 = $contenu->titre_6;
        $titre_7 = $contenu->titre_7;
        $titre6  = str_replace($parenthese,$span, $titre_6);
        $titre7  = str_replace($parenthese,$span, $titre_7);
        $carousels = Carousel::all();
        $services = Service::all();
        $subjects = Subject::all();
        $blog = blog::orderByDesc('id')->where('validate',1)->paginate(3);
        $serv_random = $services->sortByDesc('created_at')->take(6)->slice(0,3);
        $serv_random2 = $services->sortByDesc('created_at')->take(6)->slice(3,5);
        $serv_page = Service::orderByDesc('id')->paginate(9)->fragment('services');
        return view('front-end.pages.services',compact('footer_lien','footer_link','footer_text','blog','titre6','titre7','contenu','subjects','services','currentpage','serv_page','serv_random','serv_random2'));
    }
    public function newsletter (Request $request)
    {
        $request->validate([
            "mail" => "required|email|unique:newsletters,mail"
        ]);
        //welcome inscription - to dynamique
        Mail::to($request->mail)->send(new NewsletterSender($request));

        $newsletter = new Newsletter();
        $newsletter->mail = $request->mail;
        $newsletter->save();
        return redirect()->back();
    }
    // page contact
    public function contact()
    {
        $contenu = Contenu::first();
        $footer_text = $contenu->footer_text;
        $footer_link = $contenu->footer_link;
        $footer_lien = $contenu->footer_lien;
        $currentpage = 'Contact';
        $maps = Googlemaps::first();
        $subjects = Subject::all();
        return view('front-end.pages.contact',compact('footer_lien','footer_link','footer_text','contenu','currentpage','subjects','maps'));
    }
    public function blog()
    {
        $currentpage = 'Blog';
        $contenu = Contenu::first();
        $footer_text = $contenu->footer_text;
        $footer_link = $contenu->footer_link;
        $footer_lien = $contenu->footer_lien;
        $blog = blog::orderByDesc('id')->where('validate',1)->where('delete',0)->paginate(3);
        $tags = Tag::all(); 
        $categorie = Categorie::all(); 
        return view('front-end.pages.blog',compact('footer_lien','footer_link','footer_text','currentpage','blog','tags','categorie'));
    }
    public function blogshow(blog $id)
    {
        $currentpage = 'Blog';
        $contenu = Contenu::first();
        $footer_text = $contenu->footer_text;
        $footer_link = $contenu->footer_link;
        $footer_lien = $contenu->footer_lien;

        $article = $id;
        $tags = Tag::all(); 
        $categorie = Categorie::all(); 
        $comment = Comments::all()->where('valide',1); 
        return view('front-end.pages.blogshow',compact('footer_lien','footer_link','footer_text','currentpage','tags','categorie','article','comment'));
    }
    public function addcomment (Request $request, blog $article)
    {
        $comment = new Comments();
        $comment->auteur = $request->name;
        $comment->auteur_email = $request->mail;
        $comment->message = $request->message;
        $comment->valide = 0;
        $comment->save();

        $link = new Blogcomment();
        $link->blog_id = $article->id;
        $link->comments_id = $comment->id;
        $link->save();

        return redirect()->back();
    }
    public function categorie(Categorie $id)
    {
        $currentpage = 'Blog';
        $contenu = Contenu::first();
        $footer_text = $contenu->footer_text;
        $footer_link = $contenu->footer_link;
        $footer_lien = $contenu->footer_lien;

        $tags = Tag::all(); 
        $categorie = Categorie::all(); 
        $comment = Comments::all()->where('valide',1); 
        // headerpage
        $url =  url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $ref = $id;
        //selection categorie
        $blog = blog::orderByDesc('id')->where('categorie_id',$ref->id)->where('validate',1)->where('delete',0)->paginate(3);
        return view('front-end.pages.blogcate', compact('url','currentpage','footer_lien','footer_link','footer_text', 'urlCurrent','blog', 'categorie', 'tags'));
    }
    public function tag(tag $id)
    {
        $currentpage = 'Blog';
        $contenu = Contenu::first();
        $footer_text = $contenu->footer_text;
        $footer_link = $contenu->footer_link;
        $footer_lien = $contenu->footer_lien;

        $article = $id;
        $tags = Tag::all(); 
        $categorie = Categorie::all(); 
        $comment = Comments::all()->where('valide',1); 
        // headerpage
        $url =  url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $ref = $id;
        //selection categorie
        $blog = blog::orderByDesc('id')->paginate(3);


        return view('front-end.pages.blogtag', compact('footer_lien','footer_link','footer_text','url','currentpage','ref', 'urlCurrent','blog', 'categorie', 'tags','article'));
    }
    public function search(Request $request)
    {
        request()->validate([
            "article" => "required",
        ]);
        $currentpage = 'Blog';
        $contenu = Contenu::first();
        $footer_text = $contenu->footer_text;
        $footer_link = $contenu->footer_link;
        $footer_lien = $contenu->footer_lien;

        $q = $request->article;
        $blog = blog::orderByDesc('id')->where('validate',1)->where('titre', 'LIKE', "%{$q}%")->paginate(3);
        // return dd($articles[0]->categorie->nom);

        //sidebar
        $categorie = Categorie::all();
        $tags = Tag::all();

        return view('front-end.pages.blogsearch', compact('footer_lien','footer_link','footer_text','blog', 'categorie','currentpage', 'tags'));
    }

}

