<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = [
     'name','phone','vehicletype','duration'
    ];
}
