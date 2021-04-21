<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Notifications\Notify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Notifications\Notification;

class CommentController extends Controller
{
    public function commentpost(Request $request){

        $this->validate($request,[
            'comment'=>'required',
            'user_id'=>'required',
            'post_id'=>'required',
        ]);

        Comment::create([
            'comment' => $request->comment,
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
        ]);

        // Notification::send($users, new Notify());
        // auth()->user()->notify(new Notify());
        // Auth::user()->notify(new Notify());
       
        return Redirect::route('single-product',['id'=>$request->post_id]);
    }

   

  
    
    
}
