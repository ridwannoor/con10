<?php

namespace App\Models;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table ='comments';
    protected $fillable = [
        'user_id', 
        'post_id', 
        'content'
    ];

    // protected $dates = [
    //     'posted_at'
    // ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($comment) {
            if(is_null($comment->author_id)) {
                $comment->authot_id = auth()->user()->id;
            }
        });
    }

    public function blog()
    {
        return $this->belongsTo('App\Models\Blog');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
