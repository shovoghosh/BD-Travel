<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Place;
use App\Subplace;
use App\Search;
use App\Message;
use App\User;
use App\Hotel;
use Charts;

class userController extends Controller
{
    public function home(Request $request){
        $user = User::where('username',$request->session()->get('username'))->first();
        $place = Subplace::all();
        $hotel = Hotel::all();
        return view('user.home')->with('user',$user)->with('place',$place)->with('hotel',$hotel);
    }

    public function about(){
        return view('user.about');
    }

    public function contact(){
        return view('user.contact');
    }

    public function blog(){
        return view('user.blog');
    }

    public function profile(){
        return view('user.profile');
    }

    public function elements(){
        return view('user.elements');
    }

    public function offers(){
        return view('user.offers');
    }

    public function single_listing(){
        return view('user.single_listing');
    }

    public function placesearch(Request $request){
        $placename = $request->placename;
        $place = Subplace::where('placename',$placename)->get();
        $user = User::where('username',$request->session()->get('username'))->first();
        return view('user.placesearch')->with('user',$user)->with('place',$place);
    }

    public function hotelsearch(Request $request){
        $placename = $request->placename;
        $hotel = Hotel::where('pname',$placename)->get();
        $user = User::where('username',$request->session()->get('username'))->first();
        return view('user.hotelsearch')->with('user',$user)->with('hotel',$hotel);
    }

    public  function placedetail(Request $request,$id){
            $place = Subplace::find($id);
            return view('user.placedetail')->with('place',$place);
    }
    public  function hoteldetail(Request $request,$id){
        $hotel = Hotel::find($id);
        return view('user.hoteldetail')->with('hotel',$hotel);
    }
    public function searchPlacesAjax(Request $request){
        $letter = $_GET['letter'];
        $places=Place::where('name','like', $letter.'%')->get();
        return $places;
    }
    public function searchUploadAjax(Request $request){
        $searchWord = $_GET['search'];
        $search = new Search;
        $search->searchitem = $searchWord;
        $search->save();

    }
    public function mostsearched(){
//        $results = Search::whereIn('searchitem',function ($query){
//            $query->select('searchitem')->from('users')->groupBy('searchitem')->havingRaw('count(*)>1');
//        })->get();

        $results = DB::table('search')
            ->select('searchitem',DB::raw('COUNT(*) as `c`'))
            ->groupBy('searchitem')
            ->having('c', '>=', 1)
            ->get();
        $searchitem=array();
        $c=array();
        for($i=0;$i<count($results);$i++)
        {
            array_push($searchitem,$results[$i]->searchitem);
            array_push($c,intval($results[$i]->c));
        }

        $chart = Charts::create('pie','highcharts')
            ->title('Most Searched Places')
            ->labels($searchitem)
            ->values($c)
            ->dimensions(500,500)
            ->responsive(false);

        return view('user.msearched',compact('chart'));


    }

    public function sendmessage(Request $request){
        $user = User::where('username',$request->session()->get('username'))->first();
        $message = new Message();

        $message->name = $user->username;
        $message->email = $user->email;
        $message->subject = $request->subject;
        $message->message= $request->message;
        date_default_timezone_set('Asia/Dhaka');
        $message->time = date('h:i');

        $message->save();

        $request->session()->flash('message','Message Sent Successfully');
        return redirect()->route('user.contact');

    }
}
