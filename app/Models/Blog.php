<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categorie;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table ='blogs';
    protected $fillable = [         
        'title', 
        'content',
        'image',
        'user_id',
        'categorie_id', 
        'is_published'
    ];
   

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            if(is_null($blog->user_id)) {
                $blog->user_id = auth()->user()->id;
            }
        });

        static::deleting(function ($blog) {
            // $blog->comments()->delete();
            $blog->tags()->detach();
        });
    }

    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag','blog_tag','blog_id','tag_id')->withTimestamps();
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeDrafted($query)
    {
        return $query->where('is_published', false);
    }

    public function getPublishedAttribute()
    {
        return ($this->is_published) ? 'Yes' : 'No';
    }
}
