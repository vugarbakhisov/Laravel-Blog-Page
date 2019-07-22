<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reyler extends Model
{
   protected $table='reylers';
   protected $fillable=['name','comment','image','status'];
}
