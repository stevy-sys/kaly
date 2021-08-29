<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceitteIngredient extends Model
{
    use HasFactory;
    protected $fillable = ['name','quantite','unite','receitte_caracteristique_id'];
}
