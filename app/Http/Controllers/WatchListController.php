<?php

namespace App\Http\Controllers;

use App\Watchlist;
use App\UComment;
use App\SubmitPro;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class WatchListController extends Controller
{
    public function like(Request $req)
    {
        $like= new Watchlist();
        $like->like=$req['like'];
        $like->property_id=$req['property_id'];
        $like->user_id=$req['user_id'];
        $user = Watchlist::all();
        foreach($user as $u){
            if($u->user_id == $req['user_id'] && $u->property_id == $req['property_id']){
                return redirect()->back();
            }
        }
            if($like == null){
                return redirect()->back();
            }
            else
            {
                if($like != null){
                    $like->save();
                    return redirect()->back();
                }else{
                    printf("else");
                }
            }
    }
    public function watchlist()
    {
            $data = SubmitPro::all();
            $com =  Watchlist::all();
            $user = User::all();
            $user = ['user'=>$user,'com'=>$com];
            return view('watchlist',['data'=>$data],$user);
    }
    public function watchremove($id){
        $id=Crypt::decrypt($id);
        Watchlist::destroy($id);
        return redirect()->back();
    }
}
