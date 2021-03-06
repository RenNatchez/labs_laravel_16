<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class, 'blogtags', 'blog_id');
    }
    public function comments() {
        return $this->belongsToMany(Comments::class, 'blogcomments', 'blog_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
