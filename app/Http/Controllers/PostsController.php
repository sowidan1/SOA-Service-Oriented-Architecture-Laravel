<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\Contracts\PostContract;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(Request $request ,PostContract $postContract)
    {
        return response()->json($postContract->createPost($request));

    }
}
