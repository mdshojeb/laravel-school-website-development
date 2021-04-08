<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $usermail=session('email');
        $userpass=session('password');
        if(empty($usermail) && empty($userpass)){
            return redirect('/login');
        }else{
            if(session('role')==1){
                return redirect('/');
            }
        }
        return $next($request);
    }
}
