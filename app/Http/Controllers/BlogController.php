<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{

//    start home page code
    public function index(){
        return view('frontEnd.home.home',[
            'blogs'=>Blog::with('category:id,category_name','author:id,author_name,image')->get()
        ]);
    }


    public function blogDetails($slug){
//        return Blog::where('slug',$slug)->first();
        return view('frontEnd.blog.blog-details',[
            'blog'=> Blog::where('slug',$slug)->first()
        ]);
    }


//    end home page code


    public function addBlog(){
        return view('admin.blog.add-blog',[
            'categories'=>Category::where('status',1)->orderby('id','desc')->get(),
//            'categories'=>Category::where('status',1)->orderby('id','asc')->take(2)->skip(1)->get()
//            'categories'=>Category::where('status',1)->latest()->take(2)->skip(1)->get()
//            'categories'=>Category::where('status',1)->get()
            'authors'=>Author::where('status',1)->orderby('id','desc')->get()


        ]);
    }


    public function saveBlog(Request $request){
//        return $request;
        Blog::saveBlog($request);
        return back()->with('message','Blog info saved');
    }


    public function manageBlog(){
//    for database relation work process Eloquent ORM

        $blogs = Blog::with('category:id,category_name','author:id,author_name')->get();
//        note: ekhane category: and author: hocche function blog class er *******
//        return $blogs;
        return view('admin.blog.manage-blog',[
            'blogs'=> $blogs
        ]);

        //    for database relation work process Eloquent ORM


//        return view('admin.blog.manage-blog',[
//            'blogs'=> Blog::all()
//        ]);
    }



    public function deleteBlog(Request $request){
        Blog::deleteBlog($request);
        return back()->with('message','Blog info Deleted');
    }


}
