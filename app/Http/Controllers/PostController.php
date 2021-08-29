<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategorieBlog;
use App\Models\ReceitteCategorie;
use App\Models\ReceitteIngredient;
use App\Models\ReceittePreparation;
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
        return view("post.show-post-blog", compact('blog'));
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
        return view("post.create-blog", compact('categories'));
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

    /**
     * enregister une receitte
     *
     * @param Request $request
     * @return void
     */
    public function storeReceipe(Request $request)
    {
        foreach ($request->request as $key => $value) {
            if(preg_match("/name/",$key) || preg_match("/quantite/",$key) || preg_match("/unite/",$key)){
                if(preg_match("/name/",$key)){
                    $dataIngredient[$key] = request()->validate([
                        $key => 'required'
                    ])[$key];
                }
                if(preg_match("/quantite/",$key)){
                    $dataIngredient[$key] = request()->validate([
                        $key => 'required|Integer'
                    ])[$key];
                }
                if(preg_match("/unite/",$key)){
                    $dataIngredient[$key] = request()->validate([
                        $key => 'required'
                    ])[$key];
                }
            }
            elseif (preg_match("/step/",$key) ){
                $dataPreparation[$key] = request()->validate([
                    $key => 'required'
                ])[$key];
            }
            else{ 
                $dataCaracteristique = request()->validate([
                    'menu' => 'required',
                    'duree' => 'required|Integer',
                    'difficulte' => 'required',
                    'depense' => 'required|Integer',
                    'personne' => 'required|Integer'
                ]);
                $dataCaracteristique['user_id'] = auth()->user()->id;
            }
        }

        $data1 = ReceitteCategorie::find(1)->receittes()->create($dataCaracteristique);
        $dataIngredient = array_chunk($dataIngredient,3);
        $dataPreparation = array_chunk($dataPreparation,1);

        foreach ($dataIngredient as $key => $value) {
            $ing = new ReceitteIngredient();
            $ing->name =  $value[0];
            $ing->quantite = $value[1];
            $ing->unite = $value[2];
            $ing->receitte_caracteristique_id = $data1->id;
            $ing->save();
        }

        foreach ($dataPreparation as $key => $value) {
            $step = new ReceittePreparation();
            $step->step = $value[0];
            $step->receitte_caracteristique_id = $data1->id;
            $step->save();
        }

        return redirect('/home');
    }
}
