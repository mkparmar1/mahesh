<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UComment extends Model
{
    protected $table = "comment";
    public $timestamps = true;
    protected $fillable=['msg','property_id'];

    public function submitproperty(){
        return $this->belongsToMany(SubmitPro::class);
    }
}
