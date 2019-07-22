<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $table ='generals';
    protected $fillable = ['logo','image','name','email','alamat','twitter','linkedin','facebook','instagram','whatsapp'];
    protected $guarded = ['id'];
}
