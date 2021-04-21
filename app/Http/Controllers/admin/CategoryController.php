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


class CategoryController extends Controller
{
        //category admin
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryIndex=Category::orderBy('id','DESC')->get();
        return view('backend.category.index',compact('categoryIndex'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_cats=Category::orderBy('title','ASC')->get();

        return view('backend.category.create',compact('parent_cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' =>'required|min:2|max:255',
            'summary'=>'nullable',
           

        ]);

        $createData= $request->all();

       

        

        // return $banner;

        $status=Category::create($createData);


        // error or success message
        if($status){

            return redirect()->route('categoryy.index')->with('success','successfully created category');

        }
        else{
            return back()->with('error','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $parent_cats=Category::orderBy('title','ASC')->get();
        // return($parent_cats);
        $categoryEdit=Category::findOrFail($id);
        // return($categoryEdit);
        
        if($categoryEdit){
            return view('backend.category.edit',compact(['categoryEdit','parent_cats']));
        }
        else{
            return back()->with('error','Category not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categoryUpdate=Category::findOrFail($id);
        if($categoryUpdate){
            $this->validate($request,[
                'title' =>'required|min:2|max:255',
                'summary'=>'nullable',
              
    
            ]);
    
            $categoryUpdateData= $request->all();

            // if($request->is_parent==1){
            //     $categoryUpdateData['parent_id']=null;
            // }
    
                       // return $banner;
    
            $status=$categoryUpdate->fill($categoryUpdateData)->save();
    
    
            // error or success message
            if($status){
    
                return redirect()->route('categoryy.index')->with('success','successfully updated Category');
    
            }
            else{
                return back()->with('error','Something went wrong');
            }
        }
        else{
            return back()->with('error','Data not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryDelete=Category::find($id);
        

        

            $status= $categoryDelete->delete();
           
            if($status){

                return redirect()->route('categoryy.index')->with('success','Category successfully deleted');

            }
            else{
                return back()->with('error','Data not found');
            }
        
    } 

    

    

}
