<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'user_id',
        'name',
            'description',
            'image',
            'price',
            'categories',
            'details',
            'categories_id',
    ]; 
    public function comments()
    {
        // return $this->hasMany('App\Post');
        return $this->hasMany(Comment::class);
    }
    public function likes()
    { 
        return $this->hasMany(Like::class);
    }

    public function delete()
    {
        
        $this->likes()->delete();
        return parent::delete();
    }

    public function is_liked()
    {
        $id=Auth::id();

        $likers= array();

        foreach($this->likes as $like):
            array_push($likers, $like->user_id);
        endforeach;

        if(in_array($id,$likers))
        {
            return true;
        }
        else
        {
            return false;
        }
            

    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
   public function user()
   {
       return $this->belongsTo(User::class);
   }
}
