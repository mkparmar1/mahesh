<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SubmitProperty;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use app\User;
use App\SubmitPro;
use App\UComment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

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
        //return view('index');
        //$data = SubmitPro::all()->take(8);
        //return view('index',['data'=>$data],$main);
    }

     public function adminHome()
    {
        $data1 =  DB::table('submit-property')->count("id");
        $data2 =  DB::table('users')->count();
        $data3 =  DB::table('contact')->count();
        $data4 =  DB::table('comment')->count();

        $main = ["data1"=>$data1,"data2"=>$data2,"data3"=>$data3,"data4"=>$data4];

        $data= User::all();
        return view('admin.dashbord',['users'=>$data],$main);

        //return view('user-profile',['users'=>$data]);
        //return view('admin.dashbord');
    }
    public function destroy($id){
        User::destroy($id);
        //Session::flash('message', 'Delete successfully!');
        //Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.admincontact');
    }
}
