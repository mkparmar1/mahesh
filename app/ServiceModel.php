<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    //
    protected $table='service';
    public $timestamps = true;
    protected $fillable=['profile','name','phone','newphone','city','gender','work'];

}
