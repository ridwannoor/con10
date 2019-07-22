<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $table = 'features';
    protected $fillable = ['title', 'deskripsi', 'image' , 'title1','deskripsi1','image1', 'title2','deskripsi2','image2', 'title3','deskripsi3','image3'];
    protected $guarded = ['id'];
}
