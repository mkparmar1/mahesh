<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use App\Http\Requests;
use Auth;
use File;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Image;
use Illuminate\Support\Facades\Crypt;

class ProfileController extends Controller
{

    public function profiles()
    {
        return view('profiles', array('user' => Auth::user()));
    }
    public function edit()
    {
        return view('test');

    }
    public function update_avatar(Request $request,User $user1)
    {

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = $avatar->getClientOriginalName();
            Image::make($avatar)->resize(400, 400)->save(public_path('/uploads/avatars/' . $filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        $user = User::find(Auth::user()->id);
        if($user)
        {
            $user->name = $request['name'];
            $user->phone = $request['phone'];
            $user->about = $request['about'];
            $user->save();
        }
        else{
            return redirect()->back();
        }
        return view('profiles', array('user' => Auth::user()));
    }
    public function update_avatar_admin(Request $request,User $user1)
    {

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = $avatar->getClientOriginalName();
            Image::make($avatar)->resize(400, 400)->save(public_path('/uploads/avatars/' . $filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        $user = User::find(Auth::user()->id);
        if($user)
        {
            $user->name = $request['name'];
            $user->userid = $request['userid'];
            $user->phone = $request['phone'];
            $user->email = $request['email'];
            $user->about = $request['about'];
            $user->save();
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }
    public function test()
    {
        //return DB::table('users')->avg('id');
        //return DB::table('users')->max('id');
        //return DB::table('users')->min('id');
        //return DB::table('users')->sum('id');
        return DB::table('watchlist')
        ->join('submit-property','watchlist.property_id','=','submit-property.id')
        ->get();
        //return view('test',['user'=>$user]);
    }
    /*public function update(Request $request,User $user1)
    {
        //dd($request);
        $user = User::find(Auth::user()->id);
        if($user)
        {
            $user->name = $request['name'];
            $user->phone = $request['phone'];
            $user->save();
            return view('profiles');
        }
        else{
            return redirect()->back();
        }
    }*/
    public function updateProfile(Request $request){

        $user=User::find($request->id);
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = $avatar->getClientOriginalName();
            Image::make($avatar)->resize(400, 400)->save(public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        $user = User::find(Auth::user()->id);
        if($user)
        {
            $user->name = $request['name'];
            $user->userid = $request['userid'];
            $user->phone = $request['phone'];
            $user->email = $request['email'];
            $user->about = $request['about'];
            $user->save();
        }
        else{
            return redirect()->back();
        }
        return redirect()->back();
    }
    public function destroyadmin($id){
        $id=Crypt::decrypt($id);
        User::destroy($id);
        return redirect()->back();
    }
}
