<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\Siteuser;
use App\Models\Category;
use App\Models\Ads;

class MainController extends Controller
{
   public function index()
   {
      $category = Category::orderby('sort_id')->get();
      return view('index', ['categories' => $category]);        
   }

   public function category($id)
   {
      $category = Category::all()->where('category_slug', $id)->first();
      $category_id=   $category['id'];      
      $ads = Ads::where('category_id',$category_id)->get();
      return view('ads', ['ads' => $ads]);        
   }


    
   public function signup()
   {
      if(session()->has('SiteUser'))
      {
          return redirect('myaccount');
      }
      else
      {
         return view('user/signup');
      }
   }

   public function register_action(Request $request )
   {
       //return $request->all();
      $validator = Validator::make($request->all(), [
      'fname' => 'required',
      'lname' => 'required',
      'email_address' => 'required|email|unique:tbluser,email_address',
      'password' => 'required'
      ]);

      if ($validator->fails())
      {
         return redirect('/signup')
         ->withErrors($validator)
         ->withInput();
      }


      $user                               =   new Siteuser;
      $user->fname                        =   $request->fname; 
      $user->lname                        =   $request->lname; 
      $user->email_address                =   $request->email_address; 
      $user->password                     =   Hash::make($request->password); 
      $save=$user->save();

      if($save)
      {         
         return redirect('/login')->with('success','New User has been successfuly added to database');
      }
      else
      {
         return back()->with('fail','Something went wrong, try again later');
      }
   }


    public function login()
    {
      if(session()->has('SiteUser'))
      {
          return redirect('myaccount');
      }
      else
      {
         return view('user/login');
      }     
    }

    public function login_action(Request $request)
    { 
        $validator = Validator::make($request->all(), [
            'email_address' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }

        $userinfo = Siteuser::where('email_address','=',$request->email_address)->first();

        if(!$userinfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userinfo->password)){
                $request->session()->put('SiteUser', $userinfo->id);
                return redirect('myaccount');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }        

    }

    public function logout(){
      if(session()->has('SiteUser')){
          session()->pull('SiteUser');
          return redirect('/login');
      }
    }

    public function myaccount()
    {
       return view("user/myaccount");
    }
    public function profile()
    {
       return view("user/profile");
    }
    


    public function postadd()
    {
       return view('postadd');
    }
 

    
}
