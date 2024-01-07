<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Doctor;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blog($id)
    {
         
        $latestData = Blog:: orderBy('id', 'desc')
      ->limit(5) 
      ->get();
        $blog=blog::where('id',$id)->get();
       
        return view('user.blog',compact('blog','latestData'));
    }
}
