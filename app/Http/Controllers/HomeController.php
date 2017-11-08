<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

//use App\Category;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
//    public function index()
//    {
//        $posts = Post::latest()->paginate(2);
//        return view('home', compact('posts'));
//    }
    
    // function to display individual post
    public function show($id)
    {
        $post = Post::find($id);
        
        return view('posts.show', compact('post'));
    }


}
