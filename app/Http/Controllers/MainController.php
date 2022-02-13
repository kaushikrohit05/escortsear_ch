<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Siteuser;
use App\Models\Category;
use App\Models\Ads;
use App\Models\Location;
use App\Models\Gallery;
 

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

   public function ad_detail($id)
   {
        $addata = Ads::where('tbluserads.id',$id)
        ->join('tblcategory as cat','cat.id', '=', 'tbluserads.category_id')
        ->join('tbllocation as loc','loc.id', '=', 'tbluserads.region_id') 
        ->join('tbllocation as loc1','loc1.id', '=', 'tbluserads.location_id') 
        ->select('tbluserads.id','tbluserads.title','tbluserads.description','tbluserads.created_at','cat.category','loc.location as region','loc1.location as location')        
        ->first();
 
        $gallery = Gallery::all()->where('adid', $id);


        return view('adDetail', ['ads' => $addata, 'gallery'=>$gallery]);
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
                $request->session()->put('SiteUserEmail', $userinfo->email_address);
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
    
   public function user_ads()
    {
        $SiteUser = session('SiteUser');
        $ads = DB::table('tbluserads as ads')        
        ->join('tblcategory as cat','cat.id', '=', 'ads.category_id')
        ->join('tbluser as user','user.id', '=', 'ads.userid')
        ->join('tbllocation as loc','loc.id', '=', 'ads.region_id') 
        ->join('tbllocation as loc1','loc1.id', '=', 'ads.location_id') 
        ->select('ads.id','ads.title','user.fname as user','ads.created_at','cat.category','loc.location as region','loc1.location as location')        
        ->where('ads.userid', '=', $SiteUser)
        ->paginate(10);
  
        return view('user/ads', ['ads' => $ads]);
    }
    

    public function postadd()
    {
      $categories = Category::all();      
      $locations = Location::whereNull('parent')
       ->with(['children'])
       ->get(); 
      return view('user/postadd', ['categories' => $categories, 'locations' => $locations ]);       
    }

    

    public function save_ad(Request $request)
    {
         // return $request->all();
          $SiteUser = session('SiteUser');
 
                
        $validator = Validator::make($request->all(), [
            'category'          => 'required',
            'region'            => 'required',
            'location'          => 'required',
            'zip'               => 'required',
            'area'              => 'required',
            'address'           => 'required',
            'ad_title'          => 'required',
            'ad_desc'           => 'required',
            'email_address'     => 'required',
            'phone_number'      => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/postadd')
                        ->withErrors($validator)
                        ->withInput();
        }

        $Ads                            =   new Ads;
        $Ads->userid                    =   $SiteUser; 
        $Ads->category_id               =   $request->category; 
        $Ads->region_id                 =   $request->region;          
        $Ads->location_id               =   $request->location; 
        $Ads->title                     =   $request->ad_title; 
        $Ads->description               =   $request->ad_desc;
        $Ads->email                     =   $request->email_address;
        $Ads->phone                     =   $request->phone_number;
        $Ads->zip_code                  =   $request->zip;
        $Ads->area                      =   $request->area;
        $Ads->address                   =   $request->address; 
        $Ads->meta_title                =   $request->meta_title;
        $Ads->meta_description          =   $request->meta_description;
        $Ads->isActive                  =   $request->isActive; 

        $save=$Ads->save();
        $Adsid=$Ads->id;
        if($save){
            //return back()->with('success','New User has been successfuly added to database');
            //return redirect('/adgallery')->with('success','New User has been successfuly added to database');
            return redirect('/adgallery/'.$Adsid);

         }else{
             return back()->with('fail','Something went wrong, try again later');
         }        
    }


    public function new_user_new_ad(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'category'          => 'required',
            'region'            => 'required',
            'location'          => 'required',
            'zip'               => 'required',
            'area'              => 'required',
            'address'           => 'required',
            'ad_title'          => 'required',
            'ad_desc'           => 'required',
            'email_address'     => 'required|email|unique:tbluser,email_address',
            'password'          => 'required',
            'phone_number'      => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/postadd')
                        ->withErrors($validator)
                        ->withInput();
        }


         $user                               =   new Siteuser;
         $user->email_address                =   $request->email_address;
         $user->password                     =   Hash::make($request->password); 
         $save=$user->save();

         

         if($save)
         {         
          // return redirect('/login')->with('success','New User has been successfuly added to database');
         }
         else
         {
            return back()->with('fail','Something went wrong, try again later');
         }

            $userinfo = Siteuser::where('email_address','=',$request->email_address)->first();            
         
            $userId                         =   $userinfo->id;
            $Ads                            =   new Ads;           
        
            $Ads->userid                    =   $userId; 
            $Ads->category_id               =   $request->category; 
            $Ads->region_id                 =   $request->region;          
            $Ads->location_id               =   $request->location; 
            $Ads->title                     =   $request->ad_title;
            $Ads->email                     =   $request->email_address;
            $Ads->phone                     =   $request->phone_number;
            $Ads->zip_code                  =   $request->zip;
            $Ads->area                      =   $request->area;
            $Ads->address                   =   $request->address; 
            $Ads->description               =   $request->ad_desc;
            $Ads->meta_title                =   $request->meta_title;
            $Ads->meta_description          =   $request->meta_description;
            $Ads->isActive                  =   $request->isActive; 

            $save=$Ads->save();
            $Adsid=$Ads->id;

            if($save)
            {
                 return redirect('/adgallery/'.$Adsid);
            }
            else
            {
                return back()->with('fail','Something went wrong, try again later');
            }        
    }


    public function adgallery($id)
    {
        return view('user/adgallery',['adid' => $id]);

    }
    

    public function savegallery(Request $request,$id)
    {
          // return $request->all();
          //echo $id;

          if($request->hasfile('files'))
          {
             foreach($request->file('files') as $key => $file)
             {
                $filename = $id."_".$file->getClientOriginalName();
                $fileupload = $file->move(public_path('user_images'),$filename); 

                $gallery                =   new Gallery();
  
                $gallery->adid          =   $id; 
                $gallery->ad_image      =   $filename; 
                $gallery->save();
  
             }
          }

          return redirect('/postsuccess/');

    }

    public function postsuccess()
    {
        return view('user/adthanks');

    }
    
}
