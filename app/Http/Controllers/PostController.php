<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategorieBlog;
use Symfony\Component\HttpFoundation\Request;

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
        $categories = CategorieBlog::all();
        return view("post.create-blog",compact('categories'));
    }

    /**
     * Save blog user
     *
     * @param Request $request
     * @return void
     */
    public function storeBlog(Request $request)
    {
        // $id = $request->request;
        // dd($id);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'categorie_blog_id' => 'required',
        ]);
        auth()->user()->blogs()->create($data);
        // Blog::create(auth()->user());
        return redirect('/home');
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
