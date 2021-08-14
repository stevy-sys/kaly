<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * accueil du site
     *
     * @return void
     */
    public function index()
    {
        return view('index.accueil');
    }

    /**
     * page de contact
     *
     * @return void
     */
    public function contact()
    {
        return view('index.contact');
    }
}
