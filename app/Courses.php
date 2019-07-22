<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table='courses';
    protected $fillable=['basliq','odenis','sekil','mezmun','status'];


    public function category(){
		return $this->belongsTo('App\Category');
	} 
}
