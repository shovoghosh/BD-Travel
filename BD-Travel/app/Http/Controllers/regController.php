<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;

class regController extends Controller
{
    public function store(Request $request){

        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->address = $request->address;

        date_default_timezone_set('Asia/Dhaka');
        $user->registrationdate = date('Y-m-d');
        $user->save();
        return redirect()->route('login');

    }
}
