<?php

namespace App\Http\Controllers;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;

class LikeController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function like($id)
    {
        // $data= Post::find($id);
        Like::create([
            'post_id'=>$id,
            'user_id'=>auth()->id(),
        ]);


        return redirect()->back();
    }

    public function dislike($post_id)
    {
        $user = Auth::user();
        $unlike=Like:: where('post_id',$post_id)->where("user_id", "=", $user->id)->first();
        $unlike->delete();
        return redirect()->back();
    }


    public function wish_list(Request $request){
       

        $user = Auth::user();
        $posts = Like::where("user_id", "=", $user->id)->orderby('id', 'asc')->paginate(10);
        return view('pages/wishlist', compact('user', 'posts'));

    }

    // public function delete($id){
    //     $data=Like::findOrFail($id);
    //     $data->delete();

    //     return redirect()->back();

    // }
    
    
}
