<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ReceitteCaracteristique;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReceitteCategorie extends Model
{
    use HasFactory;
    public function receittes()
    {
       return $this->hasMany(ReceitteCaracteristique::class);
    }
}
