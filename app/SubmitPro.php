<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class SubmitPro extends Model
{
    protected $table='submit-property';
    public $timestamps = true;
    protected $fillable=['pics1','pics2','pics3','pname','pprice','pbuilt','phone2','email','pdesc','country','state','city','storeroom','bedroom','bathroom','parking','ac','kitchen','garden','spool','garages','pstatus','termes'];

    public function comment(){
        return $this->hasMany(UComment::class);
    }
    public function watchlist(){
        return $this->hasMany(Watchlist::class);
    }
}
