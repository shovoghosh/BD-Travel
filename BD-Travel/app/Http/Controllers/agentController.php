<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;
use App\Subplace;
use App\Place;
use Illuminate\Support\Facades\Input;


class agentController extends Controller
{
    public function home(Request $request){
        $agent = Agent::where('username',$request->session()->get('username'))->first();
        $place = Subplace::where('agentid',$agent->id)->get();
        return view('agent.home')->with('place',$place);
    }

    public function allplaces(Request $request){
        $agent = Agent::where('username',$request->session()->get('username'))->first();
        $place = Subplace::where('agentid',$agent->id)->get();
        return view('agent.allplaces')->with('place',$place);
        //return $agent;
    }

    public function addnewplace(){
        $place = Place::all();
        return view('agent.addnewplace')->with('place',$place);
    }

    public function addnewplacedb(Request $request){
            $agent = Agent::where('username',$request->session()->get('username'))->first();
            $id=$agent->id;
            $place= new Subplace();
            $place->placename= $request->placename;
            $place->subplacename=$request->subplacename;
            $place->description = $request->description;
            $place->price = $request->price.' '.BDT;
            $place->agentid = $agent->id;
            if(Input::hasfile('image')){
                $file=Input::file('image');
                $file->move(public_path().'/images/places',$id.$file->getClientOriginalName());
                $place->image=$id.$file->getClientOriginalName();
            }
            $place->save();
            $request->session()->flash('message','Place Added Succesfully');
            return redirect()->route('agent.addnewplace');
    }

}
