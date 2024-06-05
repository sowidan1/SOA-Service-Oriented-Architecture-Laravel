<?php

namespace App\Repositories;

use App\Dto\PostDto;
use App\Models\Post;

class PostRepository
{
    protected Post $post;

    public function __construct()
    {
        $this->post = new Post();
    }

    public function create(PostDto $postDto): Post{

        return Post::create([
            'title' => $postDto->title,
            'content' => $postDto->content,
        ]);

    }







    public function createPost(array $data)
    {
        return Post::create($data);
    }
}
