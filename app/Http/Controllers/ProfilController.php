<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * show profil
     *
     * @return void
     */
   public function index()
   {
      return view("profil.index");
   }
}
