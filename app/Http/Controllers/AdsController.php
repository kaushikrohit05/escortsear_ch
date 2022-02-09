<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
 
use App\Models\Ads;
use App\Models\Category;
use App\Models\Siteuser;
use App\Models\Location;

class AdsController extends Controller
{
    public function index()
    {

        $ads = DB::table('tbluserads as ads')
        ->join('tblcategory as cat','cat.id', '=', 'ads.category_id')
        ->join('tbluser as user','user.id', '=', 'ads.userid')
        ->join('tbllocation as loc','loc.id', '=', 'ads.region_id') 
        ->join('tbllocation as loc1','loc1.id', '=', 'ads.location_id') 
        ->select('ads.id','ads.title','user.fname as user','ads.created_at','cat.category','loc.location as region','loc1.location as location')        
        ->paginate(10);
  
        return view('admin/ads', ['ads' => $ads]);


    }
    public function add_ad()
    {
        $categories = Category::all(); 
        $users = Siteuser::all(); 
        $locations = Location::whereNull('parent')
         ->with(['children'])
         ->get(); 

        return view('/admin/add_ad', ['categories' => $categories, 'users' => $users, 'locations' => $locations ]);

    }

    public function save_ad(Request $request)
    {
         //return $request->all();
         //die();
                
        $validator = Validator::make($request->all(), [
            'user' => 'required',
            'category' => 'required',
            'region' => 'required',
            'location' => 'required',
            'ad_title' => 'required',
            'ad_desc' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/addad')
                        ->withErrors($validator)
                        ->withInput();
        }

        $Ads                            = new Ads;
        $Ads->userid                    =$request->user; 
        $Ads->category_id               =$request->category; 
        $Ads->region_id                 =$request->region;          
        $Ads->location_id               =$request->location; 
        $Ads->title                     =$request->ad_title; 
        $Ads->description               =$request->ad_desc;
        $Ads->meta_title                =$request->meta_title;
        $Ads->meta_description          =$request->meta_description;
        $Ads->isActive                  =$request->isActive; 

        $save=$Ads->save();
        if($save){
            //return back()->with('success','New User has been successfuly added to database');
            return redirect('admin/ads')->with('success','New User has been successfuly added to database');

         }else{
             return back()->with('fail','Something went wrong, try again later');
         }        
    }
    public function edit_ad($id = null)
    {
        $categories = Category::all(); 
        $users = Siteuser::all(); 
        $locations = Location::whereNull('parent')
         ->with(['children'])
         ->get(); 
         
        $Ads = Ads::all()->where('id',$id)->first();
        return view('admin/edit_ad', ['ad' => $Ads,'categories' => $categories, 'users' => $users, 'locations' => $locations ]);
    }
    public function update_ad($id = null)
    {
        //$category = Category::all()->where('id',$id)->first();
        //return view('admin/edit_category', ['category' => $category]);
    }
    
    
    

    public function delete_ad($id = null)
    {
        $Ads = Ads::find($id);
        $Ads->delete();
        return redirect('admin/ads');
    }
}
