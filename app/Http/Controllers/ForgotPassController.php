<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class ForgotPassController extends Controller
{
    public function forgotpassword(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
        ]);

        if($this)
        {
            $user = User::where('email','=', $input['email'],)->first();
            //$user1 = User::where('email','=', $input['email']);

            if( $user != null)
            {
                //return "login";
                return view('newForgetPass');
                //->with('error','Email-Address And Password Are Wrong.');
            }
            else{
                return redirect()->back();
                //return "login 1";
            }
        }else{
            $user1 = User::where('email','=', $request['email'])->first();

            if($user1 != null)
            {
                return "login 2";//return view('newLogin');
                //->with('error','Email-Address And Password Are Wrong.');
            }
            else{
                //return redirect()->back();
                return "login 3";
            }
        }
    }
    public function forgotupdate(Request $request)
    {
        $this->validate($request, [
            'userid' => 'required',
            'password' => 'required',
            'cpassword' => ['same:password']
        ]);


        $user = User::where('userid','=', $request['userid'])->first();
        if( $user != null)
        {
            $user->password = Hash::make($request['password']);
            $user->save();
            return view('newLogin');
        }
        else{
            return back()->with('success', 'Password successfully changed!');
        }
        return back()->with('success', 'Password successfully changed!');
    }
}
