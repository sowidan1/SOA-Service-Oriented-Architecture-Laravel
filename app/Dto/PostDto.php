<?php

namespace App\Dto;

use App\Http\Requests\PostRequest;;

class PostDto
{
    public function __construct(
        public readonly string $title,
        public readonly string $content,
    ){}

    public static function create(PostRequest $request):PostDto
    {
        return new self(
            title: $request->title,
            content: $request->content,
        );
    }
}
