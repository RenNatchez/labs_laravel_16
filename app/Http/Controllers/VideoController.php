<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index(){
        $video = Video::first();
        return view('admin.pages.video.video', compact('video'));
    }
    public function edit(Video $id){
        $video = $id;
        return view('admin.pages.video.edit', compact('video',));
    }
    public function update(Video $id, Request $request){
        request()->validate([
            'video' => ["required"],
            'miniature' => ["required"],
        ]);
        $video = $id;
            //STORAGE
            Storage::disk('public')->delete('image/'. $id->miniature);
            $request->file('miniature')->storePublicly('image/', 'public');
            $video->miniature = $request->file('miniature')->hashName();
                //DB
            $video->miniature = $request->file('miniature')->hashName();
            $video->video = $request->video;
            $video->save();
            return redirect()->route('video.index');
        }
        public function show(Video $id){
            $video = $id;
            return view('admin.pages.video.show', compact('video'));
    }
}
