<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('search');
        $posts = Post::where('name','LIKE','%'.$search.'%')->get();
        return view('pages/search',["post"=> $posts]);
    }
    public function searchAdmin(Request $request)
    {
        $search = $request->get('searchs');
        $posts = Post::where('name','LIKE','%'.$search.'%')->get();
        return view('backend/searchAdmin',["post"=> $posts]);
    }
}
