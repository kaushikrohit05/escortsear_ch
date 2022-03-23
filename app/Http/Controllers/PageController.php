<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
 

use App\Models\Siteuser;
use App\Models\Category;
use App\Models\Ads;
use App\Models\Location;
use App\Models\Gallery;
use App\Models\Page;

class PageController extends Controller
{
    //////ADMIN////////
    
    public function index()
    {
         $pages = Page::paginate(10);
         return view('admin/pages', ['pages' => $pages]);
    }
    public function add_page ()
    {
        return view('admin/add_page');

    }
    public function save_page(Request $request)
    {
        //return $request->all();
         
        $validator = Validator::make($request->all(), [
            'page_name' => 'required|unique:tblpages,page_name',
            'page_slug' => 'required|unique:tblpages,page_slug'
        ]);

        if ($validator->fails()) {
            return redirect('admin/addpage')
                        ->withErrors($validator)
                        ->withInput();
        }
    

        $page                               =   new Page;
        $page->page_name                    =   $request->page_name; 
        $page->page_slug                    =   strtolower($request->page_slug); 
        $page->page_meta_title              =   $request->page_meta_title; 
        $page->page_meta_description        =   $request->page_meta_description; 
        $page->page_description             =   $request->page_description;
        $page->isActive                     =   $request->isActive; 

        $save=$page->save();
        if($save){
            //return back()->with('success','New User has been successfuly added to database');
            return redirect('admin/pages')->with('success','New User has been successfuly added to database');

         }else{
             return back()->with('fail','Something went wrong, try again later');
         }        

    }
    public function edit_page($id = null)
    { 
        $page = Page::all()->where('id',$id)->first();
        return view('admin/edit_page', ['page' => $page]); 
    }
    public function update_page(Request $request, $id)
    {
       // return $request->all();
      //  die();
      $validator = Validator::make($request->all(), [
        'page_name' => 'required|unique:tblpages,page_name',
        'page_slug' => 'required|unique:tblpages,page_slug'
    ]);

    if ($validator->fails()) {
        return redirect('admin/editpage')
                    ->withErrors($validator)
                    ->withInput();
    }

        $page = Page::find($id);
        $page->page_name                    =   $request->page_name; 
        $page->page_slug                    =   strtolower($request->page_slug); 
        $page->page_meta_title              =   $request->page_meta_title; 
        $page->page_meta_description        =   $request->page_meta_description; 
        $page->page_description             =   $request->page_description;
        $page->isActive                     =   $request->isActive;  

        $save=$page->save();

        if($save){
            return redirect('admin/pages')->with('success','New User has been successfuly added to database');

         }else{
             return back()->with('fail','Something went wrong, try again later');
         }  

    }
    
    public function delete_page($id = null)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect('admin/pages');
    }

    /////////////front/////////////////

    //public function pages($page=null)
    public function pages($page=null)
    {
      
         $category = Category::orderby('sort_id')->get();      
         $location = Location::whereNull('parent')->orderby('sort_id')->get();
         $child_locations = Location::whereNotNull('parent')->orderby('sort_id')->get();  
 
         if($page!='')   
         {
            $page_data = Page::where('page_slug','=','terms-and-conditions')->first();
             if(!$page_data)   
             {
                 return redirect('404');
             }
             else
             {
                 return view('pages', ['page'=>$page_data,'search_categories' => $category,'search_locations' => $location, 'search_child_locations' => $child_locations ]);
             }
         }   
         else
         {
             return view('404');
 
         }         
    }
    public function notfound()
    {      
         return view('404');                
    }

}
