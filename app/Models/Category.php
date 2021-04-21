<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable=[
        'title',
    
        'summary',
      

    ];

    public function post()
    {
        // return $this->hasMany('App\Post');
        return $this->hasMany(Post::class);
    }
    
    

    public function posts()
    { 
        return $this->hasMany(Post::class);
    }

    // public function delete()
    // {
        
    //     $this->posts()->delete();
    //     return parent::delete();
    // }
 
}
