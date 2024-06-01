<?php

namespace App\Services\Services;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\Contracts\PostContract;

class PostService implements PostContract{

    public function createPost(Request $request) : Post {

        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required|max:255',
        ]);

        return Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

    }

}
