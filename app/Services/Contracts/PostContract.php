<?php

namespace App\Services\Contracts;

use App\Models\Post;
use Illuminate\Http\Request;

interface PostContract{

    public function createPost(Request $request) : Post;

}
