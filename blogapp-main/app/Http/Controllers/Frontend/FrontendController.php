<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function landing()
    {

        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('index', compact('blogs'));

        // if(auth()->user()){
        //     $blogs = Blog::orderBy('id','desc')->get();
        //     return view('index',compact('blogs'));
        // }else{
        //     return redirect('/login');
        // }

    }
    public function about()
    {

        return view('about');
    }
}
