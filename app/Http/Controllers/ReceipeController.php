<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    public function show()
    {
        return view("receipe.show");
    }
}
