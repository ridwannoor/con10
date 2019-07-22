<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';
    protected $fillable = ['title','content'];

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($categorie) {
            $categorie->blog()->delete();
        });
    }

    public function blog()
    {
        return $this->hasMany('App\Models\Blog');
    }
}
