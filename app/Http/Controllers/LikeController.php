<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{

    public function store(Request $request, Post $post)
    {

        // dd($request->user());

        // Like::create($request, [
        //     'user_id' => auth()->user()->id,
        //     'post_id' => $post->id,
        // ]);

        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
    }
    public function destroy(Post $post)
    {
        $post->likes()->where('post_id', $post->id)->delete();
        return back();
    }
}
