<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     //protected $redirectTo = 'index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if(auth()->user()->role_id == 1) {
                return redirect()->route('admin.dashbord');
            }
            else
            {
                return redirect()->route('home');
            }
            if(auth()->user()->role_id == 2) {
                return redirect()->route('user.index');
            }
            else
            {
                return redirect()->route('home');
            }
        }else{
            $user = User::where('password','=', $request['password'])->first();
            if( $user != null)
            {
                return view('newLogin');
                //->with('error','Email-Address And Password Are Wrong.');
            }
            else{
                return redirect()->route('home');

            }
        }

    }
}
