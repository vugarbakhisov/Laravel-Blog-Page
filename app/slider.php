<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table='sliders';
    protected $fillable=['ad','sira','sekil','status'];
}
