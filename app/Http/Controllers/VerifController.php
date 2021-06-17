<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Blogtags;
use App\Models\Comments;
use App\Models\role;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class VerifController extends Controller
{
    public function index(){
        return view('admin.pages.validate.validate');
    }

    // membre
    public function membre(){
        $membre = User::all()->where('validate',0);
        return view('admin.pages.validate.membre.index', compact('membre'));
    }
    public function membredit(User $id){
        $membre = $id;
        $role = role::all();
        return view('admin.pages.validate.membre.edit', compact('membre','role'));
    }
    public function membreupdate(User $id, Request $request){
        $membre = $id;
        $membre->role_id = $request->role_id;
        $membre->validate = 1;
        $membre->save();
        return redirect()->route('verif.membre');
    }
    public function membredestroy(User $id) {
        $id->delete();
        return redirect()->route('verif.membre');
    }
    // fin membre

    // article
    public function article(){
        $article = blog::all()->where('validate',0)->where('delete',0);
        return view('admin.pages.validate.article.index',compact('article'));
    }
    public function articledit(blog $id){
        $article = $id;
        $tag = Blogtags::all();
        return view('admin.pages.validate.article.edit', compact('article','tag'));
    }
    public function articleupdate(blog $id){
        $article = $id;
        $article->validate = 1;
        $article->save();
        return redirect()->route('verif.article');
    }
    public function articledestroy(blog $id) {
        $article = $id;
        $article->delete = 1;
        $article->save();
        return redirect()->route('verif.article');
    }

    // fin article

    // commentaire
    public function commentaire(){
        $commentaire = Comments::all()->where('valide',0);
        return view('admin.pages.validate.commentaire.index',compact('commentaire'));
    }
    public function commentairedit(Comments $id){
        $commentaire = $id;
        return view('admin.pages.validate.commentaire.edit', compact('commentaire'));
    }
    public function commentaireupdate(Comments $id){
        $commentaire = $id;
        $commentaire->valide = 1;
        $commentaire->save();
        return redirect()->route('verif.commentaire');
    }
    public function commentairedestroy(Comments $id) {
        $id->delete();
        return redirect()->route('verif.commentaire');
    }
    // fin commentaire
}
