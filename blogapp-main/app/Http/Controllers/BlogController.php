<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $blogs = Blog::orderBy('id','desc')->get();
        return view("blog.index",compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->name;
        $blog->desc = $request->description;
        $blog->author = $request->author;
        $blog->category_id = $request->category_id;
        if ($request->file('image')) {
            $iamge = $request->file('image');
            $filename = time() . $iamge->getClientOriginalName();
            $iamge->move('blog', $filename);
            $blog->image = 'blog/' . $filename;
        }
        $blog->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $categories = Category::all();

        return view('blog.edit',compact('blog','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $blog = Blog::find($request->blog_id);
        $blog->title = $request->name;
        $blog->desc = $request->description;
        $blog->author = $request->author;
        $blog->category_id = $request->category_id;
        if ($request->file('image')) {
            $iamge = $request->file('image');
            $filename = time() . $iamge->getClientOriginalName();
            $iamge->move('blog', $filename);
            $blog->image = 'blog/' . $filename;
        }
        $blog->update();
        return redirect('/blogs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return back();
    }
}
