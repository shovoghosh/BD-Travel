<?php

namespace App\Http\Middleware;

use Closure;
use App\Admin;

class checksessionAdmin
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

        $user = Admin::where('username',$request->session()->get('username'))->first();
        //return $user;
        if($request->session()->get('username') === null || $user === null){
            return redirect()->route('login');
        }
        return $next($request);
    }
}
