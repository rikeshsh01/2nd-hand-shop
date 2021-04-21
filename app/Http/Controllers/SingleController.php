<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SingleController extends Controller
{
    // public function index(){

    //     $posts=Post::all();
    //     return view('pages/single')->with('posts',$posts);
    // }
    public function show($id){
         $posts= Post::findOrFail($id);
         $comments = Comment::orderBy('created_at','asc')->with('user')->where('post_id',$id)->get();
         $related =DB::table('categories')->where(function($a) use ($id){
             $a->where('id','=', $id);
         })->get();
        //  return $related;
        //  $related= Category::where('')
        return view('pages/singlepage',compact('posts','comments','related'));
    }

    

    public function related(){

       
    }


}
