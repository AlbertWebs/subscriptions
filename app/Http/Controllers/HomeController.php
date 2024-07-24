<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\SendEmail;
use Spatie\Newsletter\Facades\Newsletter;
use Redirect;

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

    public function manual(){
        return view('auth.login-bk.blade');
    }

    public function terms(){
        return view('terms');
    }

    public function subscription(Request $request){
        // dd($request['areas_of_interest']);

        if(isset($request->website)){
            // this is a spam
        }else{
            $organization = $request->organization;
            $areas_of_interest = $request->areas_of_interest;
        }




        if(in_array("Microbiology", $areas_of_interest) ){
            $Microbiology = "Yes";
        }else{
            $Microbiology = "No";
        }

        if(in_array("Drug_Delivery", $areas_of_interest) ){
            $Drug_Delivery = "Yes";
        }else
        {
            $Drug_Delivery = "No";
        }


        if(in_array("Formulation_Development", $areas_of_interest) ){
            $Formulation_Development = "Yes";
        }else{
            $Formulation_Development = "No";
        }

        if(in_array("Bioprocessing", $areas_of_interest) ){
            $Bioprocessing = "Yes";
        }else{
            $Bioprocessing = "No";
        }

        // do the rest
        if(in_array("Analytical_Techniques", $areas_of_interest) ){
            $Analytical_Techniques = "Yes";
        }else{
            $Analytical_Techniques = "No";
        }

        if(in_array("Manufacturing", $areas_of_interest) ){
            $Manufacturing = "Yes";
        }else{
            $Manufacturing = "No";
        }

        if(in_array("QA/QC", $areas_of_interest) ){
            $QA_QC = "Yes";
        }else{
            $QA_QC = "No";
        }

        if(in_array("Biopharma", $areas_of_interest) ){
            $Biopharma = "Yes";
        }else{
            $Biopharma = "No";
        }

        if(in_array("Packaging_and_Labelling", $areas_of_interest) ){
            $Packaging_and_Labelling = "Yes";
        }else{
            $Packaging_and_Labelling = "No";
        }

        if(in_array("Regulatory_Affairs", $areas_of_interest) ){
            $Regulatory_Affairs = "Yes";
        }else{
            $Regulatory_Affairs = "No";
        }

        if(in_array("Health_Supply_Chain_Management", $areas_of_interest) ){
            $Health_Supply_Chain_Management = "Yes";
        }else{
            $Health_Supply_Chain_Management = "No";
        }

        if(in_array("Artificial_Intelligence", $areas_of_interest) ){
            $Artificial_Intelligence = "Yes";
        }else{
            $Artificial_Intelligence = "No";
        }

        if(in_array("Digital_version", $areas_of_interest) ){
            $Digital_version = "Yes";
        }else{
            $Digital_version = "No";
        }

        if(in_array("Newsletter", $areas_of_interest) ){
            $Newsletter = "Yes";
        }else{
            $Newsletter = "No";
        }

        if(in_array("Third_party", $areas_of_interest) ){
            $Third_party = "Yes";
        }else{
            $Third_party = "No";
        }

        if(in_array("Webinar_notifications", $areas_of_interest) ){
            $Webinar_notifications = "Yes";
        }else{
            $Webinar_notifications = "No";
        }

        if(in_array("Printed_Version_of_Magazine", $areas_of_interest) ){
            $Printed_Version_of_Magazine = "Yes";
        }else{
            $Printed_Version_of_Magazine = "No";
        }


         if(in_array("Event_notifications", $areas_of_interest) ){
            $Event_notifications = "Yes";
        }else{
            $Event_notifications = "No";
        }

        $updateUserDetails = array(
            'organization' => $organization,
            'areas_of_interest' => $areas_of_interest,
            'country_code' => $request->country_code,
            'address' => $request->address,
            'phone' => $request->phone,
            'country' => $request->country,
            'state' => $request->state,
            'Job_function' => $request->Job_function,
            'other_Job_function' => $request->other_Job_function,
            'other_areas_of_interest' => $request->other_areas_of_interest,
            'subscription_options' => $request->subscription_options,
            'terms' => $request->terms,
            'subscription_status' => 'active',
            'Microbiology' => $Microbiology,
            'Drug_Delivery' => $Drug_Delivery,
            'Formulation_Development' => $Formulation_Development,
            'Bioprocessing' => $Bioprocessing,
            'Analytical_Techniques' => $Analytical_Techniques,
            'Manufacturing' => $Manufacturing,
            'QA_QC' => $QA_QC,
            'Biopharma' => $Biopharma,
            'Packaging_and_Labelling' => $Packaging_and_Labelling,
            'Regulatory_Affairs' => $Regulatory_Affairs,
            'Health_Supply_Chain_Management' => $Health_Supply_Chain_Management,
            'Artificial_Intelligence' => $Artificial_Intelligence,
            'Digital_version' => $Digital_version,
            'Newsletter' => $Newsletter,
            'Third_party' => $Third_party,
            'Webinar_notifications' => $Webinar_notifications,
            'Printed_Version_of_Magazine' => $Printed_Version_of_Magazine,
            'Event_notifications' => $Event_notifications,
        );


        $CollectAddres =  array(
            'addr1' => Auth::User()->address,
            'city'  => Auth::User()->city,
            'state'  => Auth::User()->state,
            'zip'  => '00100',
        );

        $email = Auth::User()->email;
        Newsletter::subscribeOrUpdate($email,
            [
                'FNAME'=>Auth::User()->fname,
                'LNAME'=>Auth::User()->lname,

                'PHONE'=>Auth::User()->phone,
                'BIRTHDAY'=>'04/08',
                'MMERGE5'=>$Drug_Delivery, //Drug Delivery
                'MMERGE6'=>$Microbiology, //Microbiology
                'MMERGE7'=>$Analytical_Techniques, //Analytical Techniques
                'MMERGE8'=>$Formulation_Development, //Formulation Development
                'MMERGE9'=>$Bioprocessing, //Bioprocessing
                'MMERGE10'=>$Manufacturing, //Manufacturing
                'MMERGE11'=>$QA_QC, //Quality Assurance /Quality Control,
                'MMERGE12'=>$Biopharma, //Biopharma
                'MMERGE13'=>$Packaging_and_Labelling, //Packaging and Labelling
                'MMERGE14'=>$Regulatory_Affairs, //Regulatory Affairs
                'MMERGE15'=>$Health_Supply_Chain_Management, //Health Supply Chain Management
                'MMERGE16'=>$Artificial_Intelligence, //Artificial Intelligence
                'MMERGE17'=>$Digital_version, //Digital version of the African Pharmaceutical Review (published quarterly)
                'MMERGE18'=>$Newsletter, //Newsletter
                'MMERGE19'=>$Third_party, //Third party (application notes, product development and updates from partners)
                'MMERGE20'=>$Webinar_notifications, //Webinar notifications
                'MMERGE21'=>$Printed_Version_of_Magazine, //Printed Version of Magazine
                'MMERGE22'=>$Event_notifications, //Event notifications
                'MMERGE23'=>$country //Printed Version of Magazine
            ]);

        // dd($updateUserDetails);
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

    public function check(Request $request)
    {
     if($request->get('email'))
     {
      $email = $request->get('email');
      $data = DB::table("tbl_login")
       ->where('email', $email)
       ->count();
      if($data > 0)
      {
       echo 'not_unique';
      }
      else
      {
       echo 'unique';
      }
     }
    }
}
