<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['title', 'deskripsi', 'image' , 'title1','deskripsi1','image1', 'title2','deskripsi2','image2', 'title3','deskripsi3','image3', 'title4','deskripsi4','image4', 'title5','deskripsi5','image5'];
    protected $guarded = ['id'];
}
