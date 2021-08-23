<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class ForgotPassController extends Controller
{
    public function forgotpassword(Request $request)
    {
        $forgot = User::find($request->id);
        $user = User::where('phone','=', $request['phone'])->first();
        if( $user != null)
        {
            $user = User::where('email','=', $request['email'])->first();
            if( $user != null)
            {
                return view('newForgetPass');
            }
        }
        else{
            return back();
        }
    }
    public function forgotupdate(Request $request)
    {
        $user = User::where('userid','=', $request['userid'])->first();
        if( $user != null)
        {
            $user->password = $request['password'];
            $user->save();
            return view('newLogin');
        }
        else{
            return back();
        }
    }
}
