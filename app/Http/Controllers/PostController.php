<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): string
    {
        $post = Post::query()->find(1);

        return $post->user->name;
    }
}
