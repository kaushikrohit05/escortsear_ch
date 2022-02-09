<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[MainController::class,'index']);
Route::get('/category/{id}',[MainController::class,'category']);
Route::get('/postadd',[MainController::class,'postadd']); 

Route::post('/registeraction',[MainController::class,'register_action']); 
Route::post('/loginaction',[MainController::class,'login_action'])->name('loginaction');
Route::get('/logout',[MainController::class,'logout'])->name('logout');

Route::get('/login',[MainController::class,'login'])->name('login');
Route::get('/signup',[MainController::class,'signup'])->name('signup');


Route::group(['middleware'=>['UserCheck']], function(){

    Route::get('/myaccount',[MainController::class,'myaccount']);
    Route::get('/profile',[MainController::class,'profile']);
}); 

//////////////ADMIN ROUTES //////////////////////////////////////
Route::post('/admin/registeraction',[AdminController::class,'register_action'])->name('admin.registeraction');     
Route::post('/admin/loginaction',[AdminController::class,'login_action'])->name('admin.loginaction');
Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');

Route::group(['middleware'=>['AdminCheck']], function(){

    Route::get('/admin/register',[AdminController::class,'register'])->name('admin.register');
    Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
    

    Route::get('/admin',[AdminController::class,'index'])->name('dashboard');
    Route::get('/admin/pages',[AdminController::class,'pages'])->name('pages');

    Route::get('/admin/users',[UsersController::class,'index'])->name('users');
    Route::get('/admin/adduser',[UsersController::class,'add_user'])->name('adduser');
    Route::post('/admin/saveuser',[UsersController::class,'save_user'])->name('saveuser');
    Route::get('/admin/edituser/{id}',[UsersController::class,'edit_user'])->name('edituser');
    Route::post('/admin/updateuser/{id}',[UsersController::class,'update_user']);
    Route::get('/admin/deleteuser/{id}',[UsersController::class,'delete_user'])->name('deleteuser');

    
    Route::get('/admin/ads',[AdsController::class,'index'])->name('ads');
    Route::get('/admin/addad',[AdsController::class,'add_ad'])->name('addad');
    Route::post('/admin/savead',[AdsController::class,'save_ad'])->name('savead');
    Route::get('/admin/editad/{id}',[AdsController::class,'edit_ad'])->name('editad');
    Route::post('/admin/updatead/{id}',[AdsController::class,'update_ad']);
    Route::get('/admin/deletead/{id}',[AdsController::class,'delete_ad'])->name('deletead');

    Route::get('/admin/categories',[CategoriesController::class,'index'])->name('categories');
    Route::get('/admin/addcategory',[CategoriesController::class,'add_category'])->name('addcategory');
    Route::post('/admin/savecategory',[CategoriesController::class,'save_category'])->name('savecategory');
    Route::get('/admin/editcategory/{id}',[CategoriesController::class,'edit_category'])->name('editcategory');
    Route::post('/admin/updatecategory/{id}',[CategoriesController::class,'update_category']);
    Route::get('/admin/deletecategory/{id}',[CategoriesController::class,'delete_category'])->name('deletecategory');    
    Route::get('/admin/sortcategory/{id}/{value}',[CategoriesController::class,'sort_category'])->name('sortcategory');

    Route::get('/admin/locations',[LocationController::class,'index'])->name('locations');
    Route::get('/admin/addlocation',[LocationController::class,'add_location'])->name('addlocation');
    Route::post('/admin/savelocation',[LocationController::class,'save_location'])->name('savelocation');
    Route::get('/admin/editlocation/{id}',[LocationController::class,'edit_location'])->name('editlocation');
    Route::post('/admin/updatelocation/{id}',[LocationController::class,'update_location']);
    Route::get('/admin/deletelocation/{id}',[LocationController::class,'delete_location'])->name('deletelocation');

    Route::get('/admin/pages',[PageController::class,'index'])->name('pages');
    Route::get('/admin/addpage',[PageController::class,'add_page'])->name('addpage');
    Route::post('/admin/savepage',[PageController::class,'save_page'])->name('savepage');
    Route::get('/admin/editpage/{id}',[PageController::class,'edit_page'])->name('editpage');
    Route::post('/admin/updatepage/{id}',[PageController::class,'update_page']);
    Route::get('/admin/deletepage/{id}',[PageController::class,'delete_page'])->name('deletepage');


 
});
Route::get('/admin/getlocations/{id}',[LocationController::class,'getlocations']);