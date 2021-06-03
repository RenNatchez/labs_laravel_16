<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
        $video = Video::first();
        return view('admin.pages.video.video', compact('video'));
    }

}