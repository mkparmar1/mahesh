<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubmitPro;
use App\UComment;
use App\User;
use App\Watchlist;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Image;

class SubmitProperty extends Controller
{
    public function index()
    {
        $data = SubmitPro::all();
        $data1 = UComment::all();

        return view('user-properties',['data'=>$data],['data1'=>$data1]);
    }
    public function showadmin()
    {
        $data = SubmitPro::all();
        return view('admin.adminuserpro',['data'=>$data]);
    }
    public function pstore(Request $request)
    {
        $user=new SubmitPro();
        if ($request->hasFile('pics1')) {
            $pics1 = $request->file('pics1');
            $filename1 = $pics1->getClientOriginalName();
            Image::make($pics1)->resize(1920,1200)->save(public_path('/uploads/userpro/1/' . $filename1));
            $user->pics1 = $filename1;
        }
        if ($request->hasFile('pics2')) {
            $pics2 = $request->file('pics2');
            $filename2 = $pics2->getClientOriginalName();
            Image::make($pics2)->resize(1920,1200)->save(public_path('/uploads/userpro/2/' . $filename2));
            $user->pics2 = $filename2;
        }
        if($request->hasFile('pics3')){
            $pics3 = $request->file('pics3');
            $filename3 = $pics3->getClientOriginalName();
            Image::make($pics3)->resize(1920,1200)->save(public_path('/uploads/userpro/3/' . $filename3));
            $user->pics3 = $filename3;
        }
        if($user)
        {
            $user->pname = $request['pname'];
            $user->pprice = $request['pprice'];
            $user->pbuilt = $request['pbuilt'];
            $user->phone2 = $request['phone2'];
            $user->email = $request['email'];
            $user->pdesc = $request['pdesc'];
            $user->country = $request['country'];
            $user->state = $request['state'];
            $user->city = $request['city'];
            $user->storeroom = $request['storeroom'];
            $user->bedroom = $request['bedroom'];
            $user->bathroom = $request['bathroom'];
            $user->parking = $request['parking'];
            $user->ac = $request['ac'];
            $user->kitchen = $request['kitchen'];
            $user->garden = $request['garden'];
            $user->spool = $request['spool'];
            $user->garages = $request['garages'];
            $user->pstatus = $request['pstatus'];
            $user->termes = $request['termes'];
            $user->save();
        }
        else{
            return redirect()->back();
        }
        if($user){
            return back()->with('success','Inserted successfully');
        }
    }

    public function showdata($id)
    {
        $id = Crypt::decrypt($id);
        $data = SubmitPro::find($id);
        return view('/update-property',['data'=>$data]);
    }
    public function show1()
    {
        $data = DB::table('submit-property')
        ->orderBy('id', 'desc')
        ->get();
        return view('/buyproperty',['data'=>$data]);
        /*
        $user = User::all();
        $watch = Watchlist::all();
        $data = SubmitPro::all();
        $user = ['user'=>$user,'watch'=>$watch];
        return view('/buyproperty',['data'=>$data],$user);
        */
    }
    public function showrent()
    {
        $data = DB::table('submit-property')
        ->orderBy('id', 'desc')
        ->get();
        return view('/rentproperty',['data'=>$data]);
        //$data = SubmitPro::all();
        //return view('/rentproperty',['data'=>$data]);
    }
    public function update1(Request $request)
    {
            $user=SubmitPro::find($request->id);
            print_r($request->input());
            if ($request->hasFile('pics1')) {
                $pics1 = $request->file('pics1');
                $filename1 = $pics1->getClientOriginalName();
                Image::make($pics1)->resize(1920,1200)->save(public_path('/uploads/userpro/1/' . $filename1));
                $user->pics1 = $filename1;
            }
            if ($request->hasFile('pics2')) {
                $pics2 = $request->file('pics2');
                $filename2 = $pics2->getClientOriginalName();
                Image::make($pics2)->resize(1920,1200)->save(public_path('/uploads/userpro/2/' . $filename2));
                $user->pics2 = $filename2;
            }
            if($request->hasFile('pics3')){
                $pics3 = $request->file('pics3');
                $filename3 = $pics3->getClientOriginalName();
                Image::make($pics3)->resize(1920,1200)->save(public_path('/uploads/userpro/3/' . $filename3));
                $user->pics3 = $filename3;
            }
            if($user){
            $user->pname = $request['pname'];
            $user->pprice = $request['pprice'];
            $user->pbuilt = $request['pbuilt'];
            $user->phone2 = $request['phone2'];
            $user->email = $request['email'];
            $user->pdesc = $request['pdesc'];

            $user->country = $request['country'];
            $user->state = $request['state'];
            $user->city = $request['city'];
            $user->storeroom = $request['storeroom'];
            $user->bedroom = $request['bedroom'];
            $user->bathroom = $request['bathroom'];
            $user->parking = $request['parking'];
            $user->ac = $request['ac'];
            $user->kitchen = $request['kitchen'];
            $user->garden = $request['garden'];
            $user->spool = $request['spool'];
            $user->garages = $request['garages'];
            $user->pstatus = $request['pstatus'];
            $user->termes = $request['termes'];
            $user->save();
            return redirect()->route('user-properties');
            }
    }

    //Details-Property Function
    public function show($id)
    {
        $id= Crypt::decrypt($id);
        $com = UComment::all();
        $user = User::all();
        $data = SubmitPro::find($id);
        $main = ['user'=>$user , 'com'=>$com];
        return view('detailsproperty',['data'=>$data],$main);
    }
    public function destroy($id){
        $id=Crypt::decrypt($id);
        SubmitPro::destroy($id);
        return redirect()->route('user-properties');
    }
    public function destroyadmin($id){
        $id=Crypt::decrypt($id);
        SubmitPro::destroy($id);
        return redirect()->route('admin.adminuserpro');
    }
}
