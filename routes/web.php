<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\UploadController;
use Illuminate\Notifications\Notification;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\NotificationController;

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
// old method
// Route::get('/','app\Http\Controllers\PagesController@home');
// Route::get('/user', 'PagesController@users');
//Route::get("/home",[PagesController::class,'home']);






Route::get("/",[PagesController::class,'index']);

Route::get("/index",[PagesController::class,'index'])->name('index');
Route::get("/user",[PagesController::class,'users'])->middleware('auth');

Route::get("/singlepage/{id}",[SingleController::class,'show'])->name('single-product')->middleware('auth');

//categories

Route::get("/categories",[PagesController::class,'categories'])->name('categories');




Route::get("/upload",[UploadController::class,'upload']);
Route::get("/myupload",[UploadController::class,'shows'])->middleware('auth');
Route::get("/newupload",[UploadController::class,'newupload'])->middleware('auth');
Route::post("/uploadpost",[UploadController::class,'uploadpost'])->middleware('auth');
Route::get("editpost/{id}",[UploadController::class,'edit']);
Route::POST("edit",[UploadController::class,'update']);
Route::get("deletepost/{id}",[UploadController::class,'delete']);



// Route::get("/category",[CategoryController::class,'category']);
// Route::get("/category_page",[CategoryController::class,'category_page']);


Route::get("/about",[PagesController::class,'about']);


// Route::get("/",[PagesController::class,'welcome']);

Route::post("/commentpost",[CommentController::class,'commentpost'])->middleware('auth');
Route::get("/like_post/{id}",[LikeController::class,'like'])->middleware('auth');
Route::get("/dislike/{post_id}",[LikeController::class,'dislike'])->middleware('auth');
Route::get("/wish_list",[LikeController::class,'wish_list'])->middleware('auth');
// Route::get('/deleteWish/{id}',[LikeController::class,'delete']);

// Route::get("/notification",[NotificationController::class,'show'])->middleware('auth');



// Route::resource('post', PostsController::class);

Auth::routes();
    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/search",[SearchController::class,'search'])->name('search');



// for admin
 
Route::group(['middleware'=>['auth','admin']],function(){
    
    Route::get("/dashboard",[AdminController::class,'admin'])->name('dashboard');
    Route::get("/users",[AdminController::class,'users'])->name('users');
    Route::get("/adminpost",[AdminController::class,'post_admin'])->name('adminpost');
    
    Route::get("deletePost/{id}",[AdminController::class,'delete'])->name('deletePost');
    Route::get("/searchAdmin",[AdminController::class,'searchAdmin'])->name('searchAdmin');

    Route::get("/detail/{id}",[AdminController::class,'detail'])->name('detail-product')->middleware('auth');
    Route::get("deleteUser/{id}",[AdminController::class,'deleteUser'])->name('deleteUser');

    //category section admin
Route::resource('categoryy', 'App\Http\Controllers\admin\CategoryController');
  
});

Route::get("/searchAdmin",[SearchController::class,'searchAdmin']);

Route::get('/markAsRead', function () {
    Auth::user()->unreadNotifications->markAsRead();
    return redirect()->back();
    
});


// sitemap 
Route::get("/sitemap",[PagesController::class,'sitemap']);

// privacy 
Route::get("/privacy",[PagesController::class,'privacy']);

//show more
Route::get("/showmore1",[PagesController::class,'showmore1']);
Route::get("/showmore2",[PagesController::class,'categories']);
Route::get("/showmore3",[PagesController::class,'showmore3']);
// contact
Route::get("/contact",[PagesController::class,'contact']);


Route::get('/about', function () {
    return view('/pages/about');
    
});










