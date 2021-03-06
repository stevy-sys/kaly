<?php

namespace App\Models;

// use App\Models\Blog;
use App\Models\Blog;
use App\Models\Profil;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\CommentBlog;
use App\Models\ReceitteCaracteristique;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    
    public function comments()
    {
        return $this->hasMany(CommentBlog::class);
    }

    public function profil()
    {
        return $this->hasOne(Profil::class);
    }

    public function receittes()
    {
        return $this->hasMany(ReceitteCaracteristique::class);
    }
}
