<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * display one post blog
     *
     * @return void
     */
    public function showBlog(Blog $blog)
    {
        return view("post.show-post-blog",compact('blog'));
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
     * display post receipe
     *
     * @return void
     */
    public function showReceipe()
    {
        return view("post.show-post-receipe");
    }
}
