<?php

namespace App\Http\Middleware;

use Closure;
use App\Hotel;

class chechsessionHotel
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

        $user = Hotel::where('username',$request->session()->get('username'))->first();
        //return $user;
        if($request->session()->get('username') === null || $user === null){
            return redirect()->route('login');
        }
        return $next($request);
    }
}
