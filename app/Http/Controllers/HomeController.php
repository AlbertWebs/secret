<?php

namespace App\Http\Controllers; 
 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

use Gloudemans\Shoppingcart\Facades\Cart;

use Storage;

use Mail;

use Response;

use Hash;

use App\Payment;

use App\Models\Extra;

use App\User;

use Session;

use App\Booking;

use App\Car;

use App\Review;

use App\Curriculum;

use App\Room;

use App\Hotel;

use App\Experience;

use App\Transfer;

use App\Product;

use App\Subscriber;

use App\Services;

use App\Testimonial;

use App\Portfolio;

use App\Slider;

use App\Service_Rendered;

use App\Daily;

use App\Blog;

use App\Admin;

use App\Term;

use App\Privacy;

use App\Message;

use App\Notifications;

use App\ServiceRequest;

use App\Quote;

use App\ReplyMessage;

use App\orders;

use App\TraceServices;

use Vinkla\Instagram\Instagram; 


use App\Teacher;

use SEOMeta;
use OpenGraph;
use Twitter;

use Akaunting\Money\Currency;
use Akaunting\Money\Money;

class HomeController extends Controller
{
   
    public function commingsoon(){
        $page_title = 'We will be Back Soon';
        return view('front.commingsoon',compact('page_title')); 
    }

    public function broken(){
        $page_title = 'The page your are looking for cannot be found';
        return view('front.404',compact('page_title')); 
    }
 
    public function index()
    { 
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Secret Trek Africa Tours & Safaris - Best Tours & Safaris in Kenya');
        SEOMeta::setDescription('Secret Trek Africa is all about Mission Trips, Cultural Trips In Kenya,Special Interest Trips. Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
        $Course = DB::table('product')->paginate(9);
        $page_title = 'African Retreat Tours and Travels';
        return view('front.index',compact('Course','page_title'));
    }

    public function explore_kenya()
    { 
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Explore Kenya - Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Secret Trek Africa is all about Mission Trips, Cultural Trips In Kenya,Special Interest Trips. Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
        $Course = DB::table('product')->paginate(9);
        $page_title = 'African Retreat Tours and Travels';
        return view('front.explore-kenya',compact('Course','page_title'));
    }


    public function explore_country($slung)
    { 
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Explore '.$slung.' - Best Tours & Safaris in Kenya');
        SEOMeta::setDescription('Secret Trek Africa is all about Mission Trips, Cultural Trips In Kenya,Special Interest Trips. Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
        $Country = DB::table('countries')->where('slung',$slung)->get();
        $page_title = 'African Retreat Tours and Travels';
        return view('front.countries',compact('Country','page_title'));
    }

    

    public function explore_tanzania()
    { 
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Secret Trek Africa Tours & Safaris - Best Tours & Safaris in Kenya');
        SEOMeta::setDescription('Secret Trek Africa is all about Mission Trips, Cultural Trips In Kenya,Special Interest Trips. Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
        $Course = DB::table('product')->paginate(9);
        $page_title = 'African Retreat Tours and Travels';
        return view('front.explore-tanzania',compact('Course','page_title'));
    }

    public function experiences()
    { 
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Experiences and Adventures - Best Tours & Safaris in Kenya');
        SEOMeta::setDescription('Secret Trek Africa is all about Mission Trips, Cultural Trips In Kenya,Special Interest Trips. Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
        $Course = DB::table('product')->paginate(9);
        $page_title = 'African Retreat Tours and Travels';
        return view('front.adventure',compact('Course','page_title'));
    }


    public function plan_my_safaris()
    { 
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Plan My Safaris - Best Tours & Safaris in Kenya');
        SEOMeta::setDescription('Secret Trek Africa is all about Mission Trips, Cultural Trips In Kenya,Special Interest Trips. Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
        $Course = DB::table('product')->paginate(9);
        $page_title = 'African Retreat Tours and Travels';
        return view('front.plan_my_safaris',compact('Course','page_title'));
    }

    public function credits()
    { 
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Credits - Best Tours & Safaris in Kenya');
        SEOMeta::setDescription('Secret Trek Africa is all about Mission Trips, Cultural Trips In Kenya,Special Interest Trips. Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/credits');
        $Course = DB::table('product')->paginate(9);
        $page_title = 'African Retreat Tours and Travels';
        return view('front.credits',compact('Course','page_title'));
    }
    
    

    public function car()
    { 
        SEOMeta::setTitle('Car Hire | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/car-hire');
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        $Car = DB::table('cars')->paginate(9);
        $page_title = 'Car Hire - Transfers';
        return view('front.car',compact('Car','page_title'));
    }

    public function car_executive()
    { 
        SEOMeta::setTitle('Executive Car Hire | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/car-hire');
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        $Car = DB::table('cars')->where('executive','1')->paginate(6);
        $page_title = 'Car';
        return view('front.car',compact('Car','page_title'));
    }

    
    public function transfers()
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Airport Transfers | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/transfers');
        $page_title = 'Car';
        $Transfers = DB::table('transfers')->paginate(5);
        return view('front.transfers',compact('page_title','Transfers'));
    }
    

    public function car_category($id)
    { 
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        $carCategory = DB::table('cartypes')->where('name',$id)->get();
        foreach ($carCategory as $key => $value) {
        SEOMeta::setTitle(''.$id.' | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/car-category/'.$value->name.'');
        
            $Car = DB::table('cars')->where('category',$value->id)->paginate(20);
            $page_title = 'Car';
            return view('front.car',compact('Car','page_title'));
        }

    }

    public function carDescription($id)
    { 
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle(''.$id.' | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/car/'.$id.'');
        $Car = DB::table('cars')->where('name',$id)->get();
        $page_title = 'Car Hire - Transfers';
        return view('front.car-details',compact('Car','page_title'));
    }
    

    public function destinations($slung) 
    {
        $Country = DB::table('countries')->where('slung',$slung)->get();
        foreach($Country as $country){
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Tours and Safaris | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/tour-package');
        $page_title = 'Holidays and Safaris';
        $countries = $country->slung;
        $Destinations = DB::table('destinations')->where('country',$country->id)->where('status','1')->paginate(10);
        return view('front.destinations',compact('page_title','Destinations','countries','Country'));
        }

    }

    public function destinations_extra($slung) 
    {
        $Extra = Extra::where('slung',$slung)->get();
        foreach ($Extra as $key => $Extra) {
            $Destinations = DB::table('destinations')->where('id',$Extra->product_id)->get();
        
            // Destroy Session
            Session::forget('city');
            Session::forget('model');
            Session::forget('check_in');
            SEOMeta::setTitle('Tours and Safaris | Secret Trek Africa Tours & Safaris');
            SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
            SEOMeta::setCanonical('http://secret-trekafrica.com/tour-package');
            $page_title = 'Holidays and Safaris';
            
            return view('front.destinations_extra',compact('slung','page_title','Destinations'));
        
        }
    }

    

    public function destinations_landing() 
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Tours and Safaris | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/tour-package');
        $page_title = 'Holidays and Safaris';
        $Destinations = DB::table('destinations')->where('status','1')->paginate(10);
        return view('front.destinations-landing',compact('page_title','Destinations'));
    }

    

    public function town($town)
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Tours and Safaris | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/tour-package');
        $page_title = 'Holidays and Safaris';
        $Destinations = DB::table('experiences')->where('destination',$town)->where('status','1')->paginate(10);
        return view('front.destinations',compact('page_title','Destinations'));
    }

    

 
    public function destination_cat($title)
    {
       
   
        $Category = DB::table('category')->where('slung',$title)->get();
        foreach ($Category as $key => $value) {
            # code...
            // Destroy Session
            Session::forget('city');
            Session::forget('model');
            Session::forget('check_in');
            SEOMeta::setTitle('Tours and Safaris | Secret Trek Africa Tours & Safaris');
            SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
            SEOMeta::setCanonical('https://africaretreat.com/tour-packages/'.$value->slung.'');
            $page_title = $value->cat;
            $Destinations = DB::table('experiences')->where('cat',$value->id)->where('status','1')->paginate(20);
            return view('front.destinations',compact('page_title','Destinations'));
            }
        
    }

    

    public function destination($name)
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle(''.$name.' | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/tour-package/'.$name.'');
        $page_title = $name;
        $Destinations = DB::table('destinations')->where('slung',$name)->where('status','1')->get();
        return view('front.destination',compact('page_title','Destinations'));
    }

    public function experience($name)
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle(''.$name.' | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/tour-package/'.$name.'');
        $page_title = $name;
        $Destinations = DB::table('experiences')->where('slung',$name)->where('status','1')->get();
        return view('front.experience',compact('page_title','Destinations'));
    }



    public function category($name)
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle(''.$name.' | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
        $Categories = DB::table('category')->where('cat',$name)->get();
        foreach ($Categories as $key => $value) {
            $page_title = 'Car';
            $Destinations = DB::table('experiences')->where('cat',$value->id)->where('status','1')->paginate('5');
            return view('front.destinations',compact('page_title','Destinations'));
        }
       
    }

    
    public function beach_holidays()
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
            SEOMeta::setTitle('Beach Holidays | Secret Trek Africa Tours & Safaris');
            SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
            SEOMeta::setCanonical('http://secret-trekafrica.com/beach-holidays');
            $page_title = 'Car';
            $Destinations = DB::table('experiences')->where('beach_holidays','1')->where('status','1')->paginate('5');
            return view('front.destinations',compact('page_title','Destinations'));
        
       
    }
    

      public function hotels()
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Hotels | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/elegant-hotels');
        $page_title = 'Elegant Hotels';
        $Hotels = DB::table('hotels')->where('status','1')->paginate('9');
        return view('front.hotels',compact('page_title','Hotels'));
    }

    public function hotel($name)
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle(''.$name.' | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/hotel/'.$name.'');
        $page_title = 'Hotel';
        $Hotels = DB::table('hotels')->where('status','1')->where('name',$name)->get();
        return view('front.hotel',compact('page_title','Hotels'));
    }
       
   

    public function contact()
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('Contact Us | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/contact-us');
        $page_title = 'Contact Us';
        $SiteSettings = DB::table('sitesettings')->get();
        return view('front.contact',compact('page_title','SiteSettings'));
    }
    public function book()
    {
        
        SEOMeta::setTitle('Booking | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
        $page_title = 'Book';
        
        return view('front.book',compact('page_title'));
    }

    public function books($cat,$id)
    {
        SEOMeta::setTitle('Booking | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/booking/car/'.$id.'');
        $page_title = 'Booking Form';
        if($cat == 'car'){
            $Car = DB::table('cars')->where('id',$id)->get();

            return view('front.books-car',compact('page_title','cat','id','Car'));

        }

        if($cat == 'tour'){
            $Destination = DB::table('experiences')->where('title',$id)->get();
      
            return view('front.books-tour',compact('page_title','Destination'));
        }

        if($cat == 'rooms'){
            $Rooms = DB::table('rooms')->where('id',$id)->get();
      
            return view('front.books-rooms',compact('page_title','Rooms'));
        }

        if($cat == 'transfers'){
            $Transfers = DB::table('transfers')->where('id',$id)->get();
      
            return view('front.books-transfers',compact('page_title','Transfers'));
        }
        
        
    }

    

    public function about()
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle('About Us | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/about-us');
        $Admin = Admin::all();
        $About = DB::table('about')->get(); 
        $SiteSettings = DB::table('sitesettings')->get();
        $Services = Services::all();
        $page_title = 'About Us';
        return view('front.about',compact('page_title','Services','SiteSettings','About','Admin'));
    }

 

    

    public function terms()
    {
        SEOMeta::setTitle('Terms and Conditions | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/terms-and-conditions');
        $Term = Term::all();
        $page_title = 'Terms Of Service';
        return view('front.terms',compact('page_title','Term'));
    }

    public function trading()
    {
        SEOMeta::setTitle('Terms and Conditions | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/trading-terms');
        $Term = DB::table('trading')->get();
        $page_title = 'Trading Terms';
        return view('front.trading-terms',compact('page_title','Term'));
    }

    

    public function privacy()
    {
        SEOMeta::setTitle('Privacy Policy | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/privacy-policy');
        $Privacy = Privacy::all();
        $page_title = 'Privacy Policy';
        return view('front.privacy',compact('page_title','Privacy'));
    }

    public function copyright()
    {
        SEOMeta::setTitle('Copyright Statement | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/copyright');
        $Copyright = DB::table('copyright')->get();
        $page_title = 'Copyright Statement';
        return view('front.copyright',compact('page_title','Copyright'));
    }

    public function guide()
    {
        SEOMeta::setTitle('Travel Infomation | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/travel-guide');
        $Copyright = DB::table('about')->get();
        $page_title = 'Travel Infomation';
        return view('front.guide',compact('page_title','Copyright'));
    }
    
    public function subscribe(Request $request){
        $FindMail = DB::table('subscribers')->where('email',$request->email)->get();
        $Countmails = count($FindMail);
        if($Countmails == 0){
            $email = $request->email;
            $Subscriber = new Subscriber;
            $Subscriber->email = $email;
            $Subscriber->save();
            return "You have successfully subscribed to our news letters";
        }else{
            return "You are already in our subscribers list thank you for staying with us";
        }
        
    
        
    }
    public function request_quote(){
        $page_title = 'Request Quote';
        $SiteSettings = DB::table('sitesettings')->get();
        return view('front.request_quote',compact('page_title','SiteSettings'));
    }
    public function servicerequest($id){
        $page_title = 'Order Service';
        $Pricings = DB::table('pricing')->where('id',$id)->get();
        return view('front.servicerequest',compact('page_title','Pricings'));
    }

    public function register($id){
         // Check Auth
         
            $Course = Curriculum::find($id);
            $All = Curriculum::all();
            $page_title = 'Register Course';
            $CartItems = Cart::content();
            return view('front.reg',compact('page_title','Course','All','id','CartItems'));
         
       
    }
  

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $isExists = \App\User::where('email', $email)->first();
        //Create The Logics To return AJAX
        if($isExists){
            return response()->json(array("exists" => true));
        }else{
            return response()->json(array("exists" => false));
        }
    }

    public function signIn(Request $request){
        $email = $request->email;
        $password = $request->password; 
        $userdata = array(
            'email'     => $email,
            'password'  => $password
        );
        // Authenticate
        if (Auth::attempt($userdata)) {

            $user = User::where('email','=',$email)->first();
            Auth::loginUsingId($user->id, TRUE);
            return "Success";
            
    
        } else {        
    
            Session::flash('message_error', "Wrong Username Or Password");
            return "Wrong Username Or Password";
    
        }

    }

    public function saveData(Request $request){
        $id = Auth::user()->id;
        $updateDetails = array(
            'name'=>$request->name,
            
            'mobile'=>$request->mobile,
            'location'=>$request->location,
        
        );
        DB::table('users')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return "Success";
    }

    public function signUp(Request $request){
        //Sign Up
        $password_confirm = $request->password_confirm;
        $password_inSecured = $request->password;
        if($password_inSecured == $password_confirm){
            //register new user
            $User = new User;
            $User->name = $request->name;
            $User->email = $request->email;
            $User->password = Hash::make($password_inSecured);
            $User->save();
            //Login the user
            
            $user = User::where('email','=',$request->email)->first();
            Auth::loginUsingId($user->id, TRUE);
            return "Success";
         }else{
            Session::flash('message', "Passwords Did Not Match");
            return "Passwords Did Not Match!!";
         }
        //Login 

    }

    public function quote_request(Request $request){
        $name = $request->name;
        $email = $request->email;
        $service = $request->service;
        $content = $request->content;
        $Quote = new Quote;
        $Quote->name = $name;
        $Quote->email = $email;
        $Quote->service = $service;
        $Quote->content = $request->content;
        $Quote->save();
        $price = 'Quote Request';
        $budget = 'Quote Request';
        ReplyMessage::mailrequest($name,$email,$service,$price,$content,$budget);
        return "Your Request Has Been Received";

    }

    public function searchsite(Request $request){
        SEOMeta::setTitle('Search | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');

            $cat = $request->cat;
            $destination = $request->destination;
            $Destinations = DB::table('experiences')->where('destination','like', '%'.$destination.'%')->where('destination','like', '%'.$destination.'%')->paginate(18);
            $page_title = $destination;
            return view('front.destinations',compact('page_title','Destinations'));
        
        
    }



    public function searchCar(Request $request){
        SEOMeta::setTitle('Car Search | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
        // Used For Session
        $city = $request->city;
        $check_in = $request->check_in;
        $model = $request->model;

        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        // Create Sessions
        Session::put('city', $city);
        Session::put('model', $model);
        Session::put('check_in', $check_in);

        $Car = DB::table('cars')->where('model','like', '%'.$model.'%')->paginate(18);
        
        $page_title = 'Car';
        return view('front.car',compact('Car','page_title'));
    }



    public function search_car_filter(Request $request){
        SEOMeta::setTitle('Car Search | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
        // Destroy Session
         Session::forget('city');
         Session::forget('model');
         Session::forget('check_in');
         $price = $request->price;
         $Transmission = $request->transmission;
         $model = $request->model;
         $fuel = $request->fuel;
         $page_title = 'Car';
         $Car = DB::table('cars')->where('transmission','like', '%'.$Transmission.'%')
                                 ->where('model','like', '%'.$model.'%')
                                 ->where('fuel','like', '%'.$fuel.'%')
                                 ->where('price', '<',  $price)
                                 ->paginate(18);
         
                                 return view('front.car',compact('Car','page_title'));

    }

    public function search_transfer_filter(Request $request){
        SEOMeta::setTitle('Airport Transfer Search | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
          $mode = $request->mode;
          $capacity = $request->capacity;
          $stop = $request->stop;
          $dep = $request->dep;
          $to = $request->to;
          $from = $request->from;

        //  die();
       
         $page_title = 'Car';
         $Transfers = DB::table('transfers')
                                 ->where('to','like', '%'.$to.'%')
                                 ->where('from','like', '%'.$from.'%')
                                 ->where('mode','like', '%'.$mode.'%')
                                //  ->where('capacity','like', '%'.$capacity.'%')
                                //  ->where('stop','like', '%'.$stop.'%')
                                //  ->where('dep','like', '%'.$dep.'%')
                                 ->paginate(18);
         
                                 return view('front.transfers',compact('Transfers','page_title'));

    }

    

    public function search_experience_filter(Request $request){
        SEOMeta::setTitle('Search Holidays and Safaris | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
        // Destroy Session
         Session::forget('city');
         Session::forget('model');
         Session::forget('check_in');
         $price = $request->price;
         $duration = $request->duration;
         $location = $request->location;
         $fuel = $request->fuel;
         $page_title = 'Car';
         $Destinations = DB::table('experiences')
     
                ->where('location','like', '%'.$location.'%')
                ->where('cat','like', '%'.$request->category.'%')
         
                ->paginate(18);

                return view('front.destinations',compact('Destinations','page_title'));

    }

    public function search_hotel_filter(Request $request){
        SEOMeta::setTitle('Search Hotels | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/');
        // Destroy Session
         Session::forget('check_in');
         Session::forget('check_out');
         Session::forget('rooms');
         $rooms = $request->rooms;
         $check_out = $request->check_out;
         $check_in = $request->check_in;
         $price = $request->price;
         $location = $request->location;
         $page_title = 'Car';
         // Create Sessions
        Session::put('rooms', $rooms);
        Session::put('check_out', $check_out);
        Session::put('check_in', $check_in);
         $Hotels = DB::table('hotels')
                
                ->where('location','like', '%'.$location.'%')
               
                ->paginate(18);

                return view('front.hotels',compact('Hotels','page_title'));
                

    }

    

    
    

    

    

    

    
    public function submitMessage(Request $request){
        $email = $request->email_contact;
        $name = $request->name_contact;
        $message = $request->message_contact;
        $subject = $request->email_contact;
        
        $Message = new Message;
        $Message->name = $name;
        $Message->email = $email;
        $Message->subject = $subject;
        $Message->content = $message; 

        $Message->save();
        $Notifications = new Notifications;
        $Notifications->type = 'Message';
        $Notifications->content = 'You have a new Message';
        $Notifications->save();
        Session::flash('message', "Your Message Has Been Sent");
        ReplyMessage::mailrequest($name,$email,$subject,$message);
        $messageback = "
                <b>Email Sent</b>.<br>
                Thank you $name,<br>
                Your message has been submitted. We will contact you shortly.
        ";
        return Response::json($messageback, 200);
    }

    public function submitPlan(Request $request){
        $email = $request->email_contact;
        $name = $request->name_contact;
        $message = $request->message_contact;
        $subject = 'Plan My Trip Request';
        $messsages = '
            Hello, I need you guys to help me plan my trip<br>
            phone_contact: '.$request->phone_contact.'<br>
            Country of origin: '.$request->country.'<br>
            Area of Interest: '.$request->interest.'<br>
            Prefered destination: '.$request->prefered_destinations.'<br>
            Budget: '.$request->budget.'<br>
            duration: '.$request->duration.'<br>
            Dates: '.$request->dates.'<br>
            Number of people: Adult: '.$request->adult.' Under 12: '.$request->under_12.' Children: '.$request->children.'<br>
            Anything in Particular: '.$message.'<br>
        ';
        
        $Message = new Message;
        $Message->name = $name;
        $Message->email = $email;
        $Message->subject = $subject;
        $Message->content = $messsages; 

        $Message->save();
        $Notifications = new Notifications;
        $Notifications->type = 'Message';
        $Notifications->content = 'You have a new Message';
        $Notifications->save();
        Session::flash('message', "Your Message Has Been Sent");
        ReplyMessage::mailrequest($name,$email,$subject,$messsages);
        $messageback = "
                <b>Email Sent</b>.<br>
                Thank you $name,<br>
                Your message has been submitted. We will contact you shortly.
        ";
        return Response::json($messageback, 200);
    }

    public function submitBooking(Request $request){
        // Process Booking
        $type = $request->type;
        if($type == 'destinations'){
           $product = DB::table($type)->where('id', $request->id)->get();
           foreach($product as $pro){
               $bookedProduct = $pro->title;
               $bookedCategory = $type;
           }
        }else{
            $product = DB::table($type)->where('id', $request->id)->get();
            foreach($product as $pro){
                $bookedProduct = $pro->title;
                $bookedCategory = $type;
            }
        }

        // Process Booking
        $email = $request->email;
        $name = $request->name;
        $subject = 'New Booking';
        $message = '
            Hello '.$name.',<br>
            We have received your booking 😍<br>
            <center>info</center><br>
            Phone Contact: '.$request->phone_contact.'<br>
            Booked Safari: '.$bookedProduct.'<br>
            BookedCategory: '.$bookedCategory.'<br>
            Dates: '.$request->dates.'<br>
            Number of People: '.$request->qtyInput.'<br>
        ';
        
        $Message = new Message;
        $Message->name = $name;
        $Message->email = $email;
        $Message->subject = $subject;
        $Message->content = $message; 

        $Message->save();
        $Notifications = new Notifications;
        $Notifications->type = 'Message';
        $Notifications->content = 'You have a new Message';
        $Notifications->save();
        
        ReplyMessage::mailrequest($name,$email,$subject,$message);
        $messageback = "
                <b>Booking Received</b>.<br>
                Thank you $name,<br>
                Your Booking has been received. We will contact you shortly.
        ";
        Session::flash('message', $messageback);
        return Redirect::back();
    }

    

    public function review(Request $request){
        $email = $request->email;
        $name = $request->name;
        $review = $request->review;
        $title = $request->title;
        $rating = $request->rating;

        $product_id = $request->product_id;
        $cat = $request->cat;
        $location = $request->location;

        

        $Message = new Review;
        $Message->name = $name;
        $Message->email = $email;
        $Message->location = $location;
        $Message->title = $title; 
        $Message->cat = $cat;
        $Message->rating = $rating; 
        $Message->review = $review;
        $Message->product_id = $product_id;
       
        $Message->save();

        $Notifications = new Notifications;
        $Notifications->type = 'Review';
        $Notifications->content = 'You have a new Review';
        $Notifications->save();
        Session::flash('message', "Your Message Has Been Sent");
        
    }
    

    public function book_now(Request $request){
        $cat = $request->cat;
        if($cat == 'car'){
            // Get Product info
            $Car = Car::find($request->car_id);

            $name = $request->name;
            $email = $request->email;
            $mobile = $request->mobile;
            $message = $request->message;
            $USerLocation = 'Not Known';
            // Get Session Data
            $check_in = $request->depart;
            $check_out = $request->return;
            $USerLocation = $check_in;
            $CarName = $Car->name;
            $CarModel = $Car->model;
            $CarPrice = $Car->price;

         

            $Booking = new Booking;
            $Booking->name = $name;
            $Booking->email = $email;
            $Booking->mobile = $mobile;
            $Booking->product_id = $request->car_id;
            $Booking->category = $cat;
            $Booking->save();

            $Notifications = new Notifications;
            $Notifications->type = 'Booking';
            $Notifications->content = 'You have a new car Booking';
            $Notifications->save();
            Session::flash('message', "Your Booking Has Been Sent");
            // mail merchant
            ReplyMessage::mailBooking($name,$email,$mobile,$USerLocation,$CarModel,$CarName,$CarPrice);
            return Redirect::back();

        }else if($cat == 'tour'){
            // Get Product info
            $Experience = Experience::find($request->experience_id);
            // Get User Info
            $name = $request->name;
            $email = $request->email;
            $mobile = $request->mobile;
            $message = $request->message;
            $USerLocation = 'Not Known';
                 

            $ExperienceName = $Experience->title;
            $ExperienceLocation = $Experience->location;
            $ExperiencePrice = $Experience->price;

            
            $Booking = new Booking;
            $Booking->name = $name;
            $Booking->email = $email;
            $Booking->mobile = $mobile;
            $Booking->product_id = $request->experience_id;
            $Booking->category = $cat;
            $Booking->save();

            $Notifications = new Notifications;
            $Notifications->type = 'Booking';
            $Notifications->content = 'You have a new Booking';
            $Notifications->save();
            Session::flash('message', "Your Booking Has Been Sent");
            // mail merchant
            ReplyMessage::mailBookingExperience($name,$email,$mobile,$USerLocation,$ExperienceLocation,$ExperienceName,$ExperiencePrice);
            return Redirect::back();
            
        }else if($cat == 'transfers'){
            // Get Product info
            $Transfer = Transfer::find($id);
            // Get User Info
            $User = User::find(Auth::user()->id);
            // Get Session Data
            if(Session::has('check_in')){
                $check_in = session()->get('check_in'); 
            }else{
                $check_in = 'Unspecified';
            }

        
                            

            $TransferFrom = $Transfer->from;
            $TransferTo = $Transfer->to;
            $TransferPrice = $Transfer->price;

            $UserName = $User->name;
            $UserEmail = $User->email;
            $UserMobile = $User->mobile;
            $USerLocation = $User->location;
            
            $Booking = new Booking;
            $Booking->name = $UserName;
            $Booking->email = $UserEmail;
            $Booking->mobile = $UserMobile;
            $Booking->product_id = $id;
            $Booking->category = $cat;
            $Booking->save();

            $Notifications = new Notifications;
            $Notifications->type = 'Booking';
            $Notifications->content = 'You have a new Booking';
            $Notifications->save();
            Session::flash('message', "Your Booking Has Been Sent");
            // mail merchant
            ReplyMessage::mailBookingTransfers($UserName,$UserEmail,$UserMobile,$USerLocation,$TransferFrom,$TransferTo,$TransferPrice);
            return Redirect::back();
            
        }else if($cat == 'hotel'){
            $Hotel = Hotel::find($request->hotel_id);
            // Get User Info
            $name = $request->name;
            $email = $request->email;
            $mobile = $request->mobile;
            $message = $request->message;
            $check_in = $request->check_in;
            $check_out = $request->check_out;
            $USerLocation = 'Not Known';
            // Get Session Data
         
            $HotelName = $Hotel->name;
            $RoomName = $request->message;
            $HotelLocation = $Hotel->location;
           

            
            $Booking = new Booking;
            $Booking->name = $name;
            $Booking->email = $email;
            $Booking->mobile = $mobile;
            $Booking->HotelName;
            $Booking->category = $cat;
            $Booking->save();

            $Notifications = new Notifications;
            $Notifications->type = 'Booking';
            $Notifications->content = 'You have a new Hotel Booking';
            $Notifications->save();
            Session::flash('message', "Your Booking Has Been Sent");
            // mail merchant
            ReplyMessage::mailBookingHotelRoom($name,$email,$mobile,$USerLocation,$HotelLocation,$HotelName,$RoomName);
            return Redirect::back();
            
        }
        
    }

    
    public function sample_safaris($name)
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle(''.$name.' | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/tour-package/'.$name.'');
        $page_title = $name;
        $Destinations = DB::table('samples')->where('slung',$name)->where('status','1')->get();
        return view('front.sample',compact('page_title','Destinations'));
    }

    public function itineraries($name)
    {
        // Destroy Session
        Session::forget('city');
        Session::forget('model');
        Session::forget('check_in');
        SEOMeta::setTitle(''.$name.' | Secret Trek Africa Tours & Safaris');
        SEOMeta::setDescription('Kenya Safaris,Tanzania Safaris,Uganda Safaris,Zanzibar safaris,Accomodation,Car Hire Services,Transfers, Whatever your tastes ,Secret Trek Africa Tours & Safaris will find the perfect holiday package for you.');
        SEOMeta::setCanonical('http://secret-trekafrica.com/tour-package/'.$name.'');
        $page_title = $name;
        $Samples = DB::table('samples')->where('slung',$name)->get();
        foreach($Samples as $sample){
            $Itineraries = DB::table('itineries')->where('product_id',$sample->id)->get();
        }
        return view('front.itineraries',compact('page_title','Itineraries'));
    }

    
   
}
