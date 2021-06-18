<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Blogtags;
use App\Models\Categorie;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    public function index(){
        $articles = blog::all()->where('validate',1);
        return view('admin.pages.articles.articles', compact('articles'));
    }
    public function corbeille(){
        $articles = blog::all()->where('delete',1);
        return view('admin.pages.articles.corbeille', compact('articles'));
    }
    public function reset (blog $id ){
        $article = $id;
        $article->delete = 0;
        $article->validate = 0;
        $article->save();
        return redirect()->route('articles.index');
    }
    public function create()
    {
        $categorie = Categorie::all();
        $tags = Tag::all();
        return view('admin.pages.articles.create',compact('categorie','tags'));
    }
    public function edit(blog $id){
        $article = $id;
        $categorie = Categorie::all();
        $tags = Tag::all();
        return view('admin.pages.articles.edit',compact('article','categorie','tags'));
    }
    public function destroy(blog $id) {
        $article = $id;
        $article->delete = 1;
        $article->save();

        return redirect()->back();
    }
    public function store(Request $request)
    { 
        request()->validate([
            'titre' => ["required"],
            'contenu' => ["required",'min:200'],
            'image' => ["required"],
            'categorie' => ["required"],
        ]);
        $article = new blog();
        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
        $article->categorie_id = $request->categorie;
        $article->user_id = Auth::user()->id;
        // image
        $request->file('image')->storePublicly('image/blog', 'public');
        $article->image = $request->file('image')->hashName();
        // validate
        if (Auth::user()->role_id == 1) {
            $article->validate = true;
        } else {
            $article->validate = false;
        };
        $article->delete = false;
        $article->save();
        if ($request->tags == 0) {
        } else {
            foreach ($request->tags as $item) {
                $tag =  new Blogtags();
                $tag->tag_id = $item;
                $tag->blog_id = $article->id;
                $tag->save();
            };
        };
        return redirect()->route('articles.index');
    }
    public function update(blog $id, Request $request){
        request()->validate([
            'titre' => ["required"],
            'contenu' => ["required",'min:200'],
            'image' => ["required"],
            'categorie' => ["required"],
        ]);
        $article = $id;
        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
        $article->categorie_id = $request->categorie;
        // image
        Storage::disk('public')->delete('image/blog'. $id->image);
        $request->file('image')->storePublicly('image/blog', 'public');
        $article->image = $request->file('image')->hashName();
        $article->save();
        $oldtag = Blogtags::where('blog_id', $id->id)->get();
        foreach ($oldtag as $item) {
            $item->delete();
        }
        if ($request->tags == 0) {
        } else {
            foreach ($request->tags as $item) {
                $tag =  new Blogtags();
                $tag->tag_id = $item;
                $tag->blog_id = $article->id;
                $tag->save();
            };
        }
        return redirect()->route('articles.index');
    }

}
