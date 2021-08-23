<?php

namespace App\Http\Middleware;
use App\Http\Middleware\error;
use Illuminate\Support\Facades\Auth;
use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->role_id == 1){
            return $next($request);
        }
        else{
            return redirect('index')->with('You dont have admin access');
        }

        return redirect("/")->with(‘error’,"You don't have admin access.");
    }
}
