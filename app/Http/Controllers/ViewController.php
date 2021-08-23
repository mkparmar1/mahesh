<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SubmitPro;

class ViewController extends Controller
{
    public function index()
    {
        $data1 =  DB::table('submit-property')->count("id");
        $data2 =  DB::table('users')->count();
        $data3 =  DB::table('comment')->count();
        $data4 =  DB::table('contact')->count();
        $main = ["data1"=>$data1,"data2"=>$data2,"data3"=>$data3,"data4"=>$data4];


        $data = DB::table('submit-property')->take(8)
        ->orderBy('id', 'desc')
        ->get();
        return view('index',["data"=>$data],$main);

        //return view("index",["data1"=>$data1]);
        //$data = SubmitPro::all()->take(8);
        //return view('index',["data"=>$data],$main);
    }
    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }
}
