<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

use App\User;

use Session;

use App\orders;

use App\TraceServices;

use App\Payment;

use App\Teacher;

use datetime;
use SEOMeta;
use OpenGraph;
use Twitter;

class ClientController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // Seo
        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is my page description');
        SEOMeta::setCanonical('https://codecasts.com.br/lesson');

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Home');
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'articles');

        Twitter::setTitle('Homepage');
        Twitter::setSite('@LuizVinicius73');
        // Seo
        $id = Auth::user()->id;
        $name = Auth::user()->name;
        $User = User::find($id);
        
        $page_title = $name;
        $SiteSettings = DB::table('sitesettings')->get();
        return view('clientarea.index',compact('SiteSettings','page_title','User'));
    }

    public function profile(){
        // Seo
        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is my page description');
        SEOMeta::setCanonical('https://codecasts.com.br/lesson');

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Home');
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'articles');

        Twitter::setTitle('Homepage');
        Twitter::setSite('@LuizVinicius73');
        // Seo
        $id = Auth::user()->id;
        $User = User::find($id);
        $page_title = 'My Profile';
        return view('clientarea.profile',compact('page_title','User'));
    }

    public function orders(){
        $id = Auth::user()->id;
        $Orders = DB::table('orders')->where('user_id',$id)->get(); 
        $page_title = 'ClientArea';
        return view('clientarea.orders',compact('page_title','Orders'));
    }

    public function save(Request $request){
        //Process File Here
        $path = 'uploads/users';
       
        if(isset($request->image)){
            $fileSize = $request->file('image')->getClientSize();
                if($fileSize>=1800000){
                Session::flash('message', "File Exceeded the maximum allowed Size");
                Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
                return Redirect::back();
                }else{
                
                $file = $request->file('image');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'-image-'.$filename;
                $image = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image);
                }
        }else{
            $image = $request->image_cheat;
        }
        
        $id = Auth::user()->id;
        if($request->email == Auth::user()->email ){
            $updateDetails = array(
                'name'=>$request->name,
                
                'mobile'=>$request->mobile,
            
            );
            DB::table('users')->where('id',$id)->update($updateDetails);
            Session::flash('message', "Changes have been saved");
            return Redirect::back();
        }else{
            $updateDetails = array(
                'name'=>$request->name,
                'email'=>$request->email,
                
                'mobile'=>$request->mobile,
            
            );
            DB::table('users')->where('id',$id)->update($updateDetails);
            Session::flash('message', "Changes have been saved");
            Auth::guard('web')->logout();
            return Redirect::back();
        }
    }
    public function pay(Request $request){
        $UserID = Auth::user()->id;
        $amount = $request->amount;
        $course  =$request->course;
        $transID = $request->transID;
        $Payment = new Payment;
        $Payment->user_id = $UserID;
        $Payment->amount = $amount;
        $Payment->TransactionID = $transID;
        $Payment->course_id = $course;
        $Payment->save();
    }
    public function test($id){
        //Curriculum id Passed
    }
}
