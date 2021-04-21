<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PagesController extends Controller
{
    
    public function home(){
        return view('home');

    }
    public function index(){
        $posts= Post::orderBy('created_at','desc')->take(3)->get();
        $popular= Post::inRandomOrder()->take(3)->get();
        $feature= Post::orderBy('id','asc')->take(3)->get();
        $comments= Comment::all();
        // return $comments;
        // $mobile= Post::orderby('details','asc')->take(3)->get();
        // return view('pages/home',["post"=> $posts],["computer"=> $computer],["tv"=> $tv],["mobile"=> $mobile]);
        // return view('pages/home',["post"=> $posts],["tv"=> $tv]);
        return view('pages.home',compact(['posts','popular','feature','comments']));
        // return view('pages/home')->with($posts)->with($tv);
    }

    
    
    public function users(){
        $users= User::all();
        return view('pages/users',["user"=>$users]);

    }
    public function singlepage(){
        return view('pages/singlepage');

    }
    public function categories() 
    {
 
        $req=request()->post;
        $categoryIndex=Category::all();

        if ($req) {
            $posts = Post::where('categories', $req)->paginate(6);   
            // dd($posts); 
        } 

        else {
            $posts= Post::paginate(6);
            
        }

        return view('pages/category/index',compact('categoryIndex','posts'));
    
    }
  
     
        
    
    public function welcome(){
        return view('welcome');

    }

    public function about(){
        return view('pages/about');

    }
    // sitemap 
    public function sitemap()
    {
        $sm= Post::orderBy('created_at','desc')->get();
        return view('pages/sitemap',compact(['sm']));
    }

    public function showmore1()
    {
        $smr= Post::orderBy('created_at','desc')->get();
        return view('pages/show1',compact(['smr']));
    }
    public function showmore2()
    {
        $popular= Post::inRandomOrder()->get();
        return view('pages/show2',compact(['popular']));
    }
    public function showmore3()
    {
        $collect= Post::orderBy('id','asc')->get();
        return view('pages/show3',compact(['collect']));
    }
    // sitemap 
    public function contact()
    {
        return view('pages/contact');
    }
//privacy
    public function privacy()
    {
        return view('pages/privacy');
    }

    
  


}
