<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Doctor;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blog($slug)
    {
         
        $latestData = Blog:: orderBy('id', 'desc')
      ->limit(3) 
      ->get();
        $blog=blog::where('slug',$slug)->get();
       
        return view('user.blog',compact('blog','latestData'));
    }
}
