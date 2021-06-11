<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    public function article(){
        return $this->belongsToMany(Article::class, 'blogcomments', 'comment_id'); 
    }
}
