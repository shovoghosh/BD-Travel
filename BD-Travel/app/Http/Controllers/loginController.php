<?php

namespace App\Http\Controllers;

use App\User;
use App\Admin;
use App\Agent;
use Illuminate\Http\Request;

use App\Http\Requests;

class loginController extends Controller
{
    public function index(Request $request){
        return view('login');
    }

    public function validation(Request $request){
        $un = $request->username;
        $pw = $request->password;

        $user = User::where('username',$un)->where('password',$pw)->first();
        $admin = Admin::where('username',$un)->where('password',$pw)->first();
        $agent = Agent::where('username',$un)->where('password',$pw)->first();

        if($user !== null){
            $request->session()->put('username',$un);
            return redirect()->route('user.home');
        }elseif($admin !== null){
            $request->session()->put('username',$un);
            return redirect()->route('admin.home');
        }elseif($agent !== null){
            $request->session()->put('username',$un);
            return redirect()->route('agent.home');
        }else{
            $request->session()->flash('message','Invalid Username or password');
            return redirect()->route('login');
        }
    }
}
