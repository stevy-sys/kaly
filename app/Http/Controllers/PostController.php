<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * display one post
     *
     * @return void
     */
    public function show()
    {
        return view("post.index");
    }

    /**
     * display create post blog
     *
     * @return void
     */
    public function createBlog()
    {
        return view("post.create-blog");
    }

    /**
     * display create post receipe
     *
     * @return void
     */
    public function createReceipe()
    {
        return view("post.create-receipe");
    }
}
