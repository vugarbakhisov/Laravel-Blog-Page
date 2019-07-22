<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meqaleler extends Model
{
   protected $table="meqalelers";
   protected $fillable=['muellif','basliq','adres','vaxt','mezmun','sekil','status'];
}
