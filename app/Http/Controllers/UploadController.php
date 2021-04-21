<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use App\Notifications\PostNotification;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;

class UploadController extends Controller
{
    public function __constructor(){                //auth middleware for controller
        $this->middleware('auth')->except('shows');

    }
    public function upload(){
        return view('pages/upload');

    }
    public function myupload(){
        return view('pages/upload/myupload');

    }
    
    public function newupload(){
        $cat=Category::all();
        return view('pages/upload/newupload',compact('cat'));
    }


    public function uploadpost(Request $request){
        $this->validate($request,[
            'name' =>'required|min:2|max:255',
            'description'=>'nullable',
            'image'=>'required',
            'price'=>'required',
            'categories'=>'required',
            'details'=>'required',
            'issue'=>'nullable',

        ]);
        $post=new Post;
        $post->name=request('name');
        $post->description=request('description');
        $post->price=request('price');
        $post->details=request('details');
        $post->categories=request('categories');
        // for image uploads
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.'.$extension;
            $file->move('uploadimage/',$filename);
            $post->image =$filename;
        }
        
      
        // for authentication as secondary key
        $post->user_id=auth()->id();

        $post->save();

        //notification
        $user=User::where('user_type','admin')->get();
        // return $user;
        Notification::send($user, new PostNotification($request->name));

            if($post){
             
                return Redirect::to('newupload')->withSuccess('sucessfully posted ');
            }
            else{
                
                return back()->with('errors','Something went wrong,Try Again');
            }
       
    }

    public function shows(){
        // $posts= post::where('name','MANISH')->get();
        // $posts= post::all();
        $post=new Post;
        $post->user_id=auth()->id();
        $posts= Post::where('user_id',auth()->id())->get();
    
        return view('pages/upload/myupload',["post"=> $posts]);
    }
   
    public function edit($id){
        $post= Post::find($id);
        $cat=Category::all();
        return view('pages/upload/editpost',compact('cat','post'));
        // return view('pages/upload/editpost',["post"=> $posts]);
    }

    public function update(Request $request){
        $this->validate($request,[
            'name' =>'required|min:2|max:255',
            'description'=>'nullable',
            'image'=>'required',
            'price'=>'required',
            'categories'=>'required',
            'details'=>'required',

        ]);
        $post=Post::find($request->id);
        $post->name=request('name');
        $post->description=request('description');
        $post->price=request('price');
        $post->details=request('details');
        $post->categories=request('categories');
        // for image uploads
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.'.$extension;
            $file->move('uploadimage/',$filename);
            $post->image =$filename;
        }
        // for authentication as secondary key
        $post->user_id=auth()->id();
        $post->save();
       
       if($post){

        return Redirect::to('myupload')->withSuccess('sucessfully posted ');
    }
    else{
        
        return back()->with('errors','Something went wrong,Try Again');
    }
        
   }

   public function delete($id){
    $posts= Post::find($id);
    $posts->delete();
    return Redirect::to('myupload')->withSuccess('sucessfully deleted ');
}



}
