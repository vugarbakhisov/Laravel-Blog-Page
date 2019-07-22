<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nizamlar extends Model
{
  protected $table='nizamlars';
  protected $fillable=['title','description','unvan','tel','ofis','email','poct','facebook','instagram','youtube']; 
}
