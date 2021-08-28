<?php

namespace App\Models;

use App\Models\User;

use App\Models\CategorieBlog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','categorie_blog_id','description','title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(CommentBlog::class);
    }

    public function categorieBlog()
    {
        return $this->belongsTo(CategorieBlog::class);
    }
}
