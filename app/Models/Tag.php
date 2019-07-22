<?php

namespace App\Models;


use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['name'];

    public function blogs()
    {
        return $this->belongsToMany('App\Models\Blog','blog_tag','blog_id','tag_id')->withTimestamps();
    }
}
