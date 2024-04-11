<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\SendEmail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function wizard(){
        return view('wizard');
    }

    public function thank(){
        return view('thanks');
    }



    public function subscription(Request $request){
        if(isset($request->website)){
            // this is a spam
        }else{
            $Job_function = $request->Job_function;
            $areas_of_interest = $request->areas_of_interest;
        }
        // dd($request->all());
        $updateUserDetails = array(
            'Job_function' => $Job_function,
            'areas_of_interest' => $areas_of_interest
        );
        DB::table('users')->where('id',Auth::User()->id)->update($updateUserDetails);
        $Sender = "info@africanpharmaceuticalreviews.com";
        $SenderId = "Africa Pharmaceutical Reviews";
        $MessageToSubscriber = "";
        $MessageToCompany = "";
        $SubscriberName = Auth::User()->name;
        $SubscriberId = Auth::User()->email;
        $Subject = "Your Subscription:Success";
        // Send Email To Subscriber
        SendEmail::sendEmail($Sender,$SenderId,$MessageToSubscriber,$SubscriberName,$SubscriberId,$Subject);
        $Subject = "New Subscriber:Success";
        // Send Email To Pharverse
        SendEmail::sendEmails($Sender,$SenderId,$MessageToCompany,$SubscriberName,$SubscriberId,$Subject);
        return view('thanks');
    }
}
