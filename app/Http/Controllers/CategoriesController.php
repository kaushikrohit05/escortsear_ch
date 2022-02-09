<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $category = Category::orderby('sort_id')->paginate(10);
        return view('admin/categories', ['categories' => $category]);
    }

    public function add_category()
    {         
        return view('admin/add_category');
    }
    public function save_category(Request $request)
    {
        //return $request->all();
         
        $validator = Validator::make($request->all(), [
            'category' => 'required|unique:tblcategory,category',
            'category_slug' => 'required|unique:tblcategory,category_slug'
        ]);

        if ($validator->fails()) {
            return redirect('admin/addcategory')
                        ->withErrors($validator)
                        ->withInput();
        }
        //$ext  = $request->file('category_image')->getClientOriginalExtension();
      //  $filename=$request->category_slug.'.'.$ext;

        //$fileupload = $request->file('category_image')->storeAs('public/uploads',$filename);
       // $fileupload = $request->file('category_image')->storeAs('public/uploads',$filename);
       // $fileupload = $request->file('category_image')->move(public_path('uploads'),$filename);  


        $category                               = new Category;
        $category->category                     =$request->category; 
        $category->category_slug                =strtolower($request->category_slug); 
        $category->category_small_description   =$request->small_desc;


        if($request->hasFile('category_image'))
        {

        $ext  = $request->file('category_image')->getClientOriginalExtension();
        $filename=$request->category_slug.'.'.$ext;
        $category->category_image =$filename; 
        $fileupload = $request->file('category_image')->move(public_path('uploads'),$filename);  

        }

          
        $category->category_title =$request->meta_title; 
        $category->category_description =$request->meta_description; 
        $category->isActive =$request->isActive; 

        $save=$category->save();
        if($save){
            //return back()->with('success','New User has been successfuly added to database');
            return redirect('admin/categories')->with('success','New User has been successfuly added to database');

         }else{
             return back()->with('fail','Something went wrong, try again later');
         }        

    }
    public function edit_category($id = null)
    {
         //echo $id; 
         //return view('admin/edit_category');
        $category = Category::all()->where('id',$id)->first();
        return view('admin/edit_category', ['category' => $category]);
    }


    public function update_category(Request $request, $id)
    {
       // return $request->all();
      //  die();
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'category_slug' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin/addcategory')
                        ->withErrors($validator)
                        ->withInput();
        }

        $category = Category::find($id);
        $category->category                     =$request->category; 
        $category->category_slug                =$request->category_slug;
        $category->category_small_description   =$request->small_desc;
        
        if($request->hasFile('category_image'))
        {

        $ext  = $request->file('category_image')->getClientOriginalExtension();
        $filename=$request->category_slug.'.'.$ext;
        $category->category_image =$filename; 
        $fileupload = $request->file('category_image')->move(public_path('uploads'),$filename);  

        }

        $category->category_title =$request->meta_title; 
        $category->category_description =$request->meta_description; 
        $category->isActive =$request->isActive; 

        $category->save();

        return redirect('admin/categories');
    }
    
    public function delete_category($id = null)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/categories');
    }

    public function sort_category($id = null, $val=null)
    {
        $category = Category::find($id);
        $category->sort_id    =$val;
        $category->save(); 
    }

}
