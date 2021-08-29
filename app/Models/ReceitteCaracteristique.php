<?php

namespace App\Models;

use App\Models\User;
use App\Models\ReceitteCategorie;
use App\Models\ReceitteIngredient;
use App\Models\ReceittePreparation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReceitteCaracteristique extends Model
{
    use HasFactory;

    protected $fillable = ['menu','categorie_recette_id','duree','difficulte','depense','personne','user_id'];

    public function categorie()
    {
        return $this->belongsTo(ReceitteCategorie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ingredient()
    {
        return $this->belongsTo(ReceitteIngredient::class);
    }

    public function preparation()
    {
        return $this->belongsTo(ReceittePreparation::class);
    }
}
