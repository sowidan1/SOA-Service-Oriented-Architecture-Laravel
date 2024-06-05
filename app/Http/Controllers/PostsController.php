<?php

namespace App\Http\Controllers;

use App\Dto\PostDto;
use App\Http\Requests\PostRequest;
use App\Services\Facades\PostFacade;
class PostsController extends Controller
{
    public function store(PostRequest $request)
    {
        return response()->json(PostFacade::createPost(PostDto::create($request)));

    }
}
