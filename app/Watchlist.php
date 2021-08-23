<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    //
    protected $table = "watchlist";
    public $timestamps = true;
    protected $fillable=['like','property_id'];

    public function submitproperty(){
        return $this->belongsToMany(SubmitPro::class);
    }
}
