<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $table='contact';
    public $timestamps = true;
    protected $fillable=['firstname','email','subject','message',];
}
