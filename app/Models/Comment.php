<?php

namespace App\Models;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table ='comments';
    protected $fillable = [
        'name', 
        'email', 
        'comment',
        'approved',
        'blog_id'
    ];

    // protected $dates = [
    //     'posted_at'
    // ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($comment) {
    //         if(is_null($comment->blog_id)) {
    //             $comment->blog_id = $blog()->id;
    //         }
    //     });
    // }

    public function blog()
    {
        return $this->belongsTo('App\Models\Blog');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
