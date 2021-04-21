<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Models\User;

use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    public function admin(){
        $posts= Post::all();
        $users= User::all();
        return view('backend/index', ['post'=>$posts, 'user'=>$users]); 
    


    }

    public function users(){
        $users= User::all();
        return view('/backend/users',["user"=> $users]);
        

    }
    public function post_admin(){
        
        $users=Post::with('user')->get();
        return view('/backend/post/index',['user'=>$users]);
        

    }
    public function delete($id){
        $postDelete=Post::find($id);
        $postDelete->delete();
            return redirect()->route('adminpost')->with('success','Post successfully deleted');


        
    }
    public function searchAdmin(Request $request)
    {
        $search = $request->get('searchs');
        $posts = Post::where('name','LIKE','%'.$search.'%')->get();
        return view('backend/searchadmin',["post"=> $posts]);
    }

    public function detail($id){
        $posts= Post::findOrFail($id);
        $comments = Comment::orderBy('created_at','asc')->with('user')->where('post_id',$id)->get();
       return view('backend/post/detail',compact('posts','comments'));
   }

   public function deleteUser($id){
    $userDelete=User::find($id);
    $userDelete->delete();
        return redirect()->route('users')->with('success','User successfully deleted');


    
    }


    

    

    

}
