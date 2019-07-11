<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use DB;
use Charts;
use App\Message;
use App\MessageAdmin;
use Illuminate\Support\Facades\Input;

class adminController extends Controller
{

    public function home(){
        return view('admin.home');
    }

    public function addnewplace(){
        return view('admin.addnewplace');
    }

    public function addnewuser(){
        return view('admin.addnewuser');
    }

    public function addnewuserDB(Request $request){
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $phone = $request->phone;
        $username = $request->username;
        $password = $request->password;
        $address = $request->address;

        $user = new User();
        $user->username = $username;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->phone = $phone;
        $user->address = $address;
        $user->password = $password;
        date_default_timezone_set('Asia/Dhaka');
        $user->registrationdate = date('Y-m-d');
        $user->save();

        $request->session()->flash('message','Member Added Successfully');
        return redirect()->route('admin.addnewuser');
    }

    public function adduserimage(){
        return view('admin.adduserimage');
    }

    public function allmember(){
        $result=User::all();
        //return $result;
        return view('admin.allmember')->with('users',$result);
    }

    public function allplaces(){
        return view('admin.allplaces');
    }

    public function booked(){
        return view('admin.booked');
    }

    public function bookinghistory(){
        return view('admin.bookinghistory');
    }

    public function guides(){
        return view('admin.guides');
    }

    public function hotelmanager(){
        return view('admin.hotelmanager');
    }

    public function inbox(){

        $message = Message::all();
        return view('admin.inbox2')->with('message',$message);
    }

    public function pendingbooking(){
        return view('admin.pendingbooking');
    }

    public function transactionhistory(){
        return view('admin.transactionhistory');
    }

    public function transportmanager(){
        return view('admin.transportmanager');
    }
    public function report(){
        $users = User::where(DB::raw("(DATE_FORMAT(registrationdate,'%Y'))"),date('Y'))
            ->select('registrationdate AS created_at')
            ->get();

        //return ($users);

        $chart = Charts::database($users,'bar','highcharts')
                    ->title('monthly new register users')
                    ->elementLabel('Total Users')
                    ->dimensions(500,500)
                    ->responsive(true)
                    ->groupBymonth(date('Y'),true);
        return view('admin.report',compact('chart'));
    }

    public function searchUserAjax(){
        $user = User::find($_GET['id']);
        return $user;

    }

    public function editmembersubmit(Request $request){
        $username = $request->order_name;
        $email = $request->order_email;
        $phone = $request->order_mobile;
        $id = $request->id;

        $user = User::find($id);

        $user->username = $username;
        $user->email = $email;
        $user->phone = $phone;
        $user->save();

        $request->session()->flash('message','Member info Updated');
        return redirect()->route('admin.allmember');
    }

    public function searchUserByLetterAjax(Request $request,$letter){
        $user = User::where('username',$letter);

        if($user){
            return true;
        }else{
            return false;
        }
    }

    public function deletemember(Request $request){
        $user = User::destroy($request->uid);
        if($user){
            $request->session()->flash('message','Member Deleted');
            return redirect()->route('admin.allmember');

        }else{
            $request->session()->flash('message','Something Went Wrong');
            return redirect()->route('admin.allmember');
        }
    }

    public function searchUserForImageAjax(){
        $letter = $_GET['letter'];
        $user=User::where('username','like', $letter.'%')->get();
        return $user;
    }

    public function uploadimage(Request $request){
        $user = User::where('username',$request->usernameSearch)->first();
        $id=$user->id;
        //return $user;
        if(Input::hasfile('userImage')){
            $file=Input::file('userImage');
            $file->move(public_path().'/profilepic',$id.$file->getClientOriginalName());
            $user->image=$id.$file->getClientOriginalName();
        }
        $user->save();

        $request->session()->flash('message','Image Uploaded');
        return redirect()->route('admin.adduserimage');
    }

    public function modalMessage(){
        $message = Message::find($_GET['id']);
        return $message;
    }

    public function insertMessageFromAdmin(Request $request){
        $message = new MessageAdmin();
        $message->mfrom = $request->session()->get('username');
        $message->mto = $_GET['mto'];
        $message->subject = $_GET['subject'];
        $message->message = $_GET['message'];
        $message->time = $_GET['time'];

        if($message->save()){
            return 'Message sent Successfully';
        }else{
            return 'something wrong please try again Later';
        }
    }

    public function deleteMessage(Request $request){
        $id = $_GET['id'];
        $ok = Message::destroy($id);
        if($ok){
            return 'Message deleted Succcessfully';
        }else{
            return 'Something Wrong Please try Again Later';
        }
    }

    public function searchUserRegAjax(Request $request){
          $letter = $_GET['letter'];
        $user=User::where('username', $letter)->first();
        if($user == ""){
            return "";
        }else{
            return "ok";
        }


    }
}
