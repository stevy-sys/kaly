<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceittePreparation extends Model
{
    use HasFactory;
    protected $fillable = ['receitte_caracteristique_id'];
}
