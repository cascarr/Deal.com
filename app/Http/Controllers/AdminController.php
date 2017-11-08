<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\User;

use App\role;

use App\Post;

use App\Comment;

use App\Category;

use App\Department;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* To avoid getting redirected to login page */
        $this->middleware('auth:admin');
        
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contributors = Comment::where('post_id', '=', 'null')->count();
        $comments = Comment::count();
        
        $ideas = Post::count();
        
        $categories = Category::all();
        
        $auths = User::all();
        
        $roles = role::all();
        
        $posts = Post::all();
        
        $departments = Department::all();
        
        return view('admin.home', compact('comments','ideas', 'contributors', 'categories', 'auths', 'roles', 'posts', 'departments'));
    }
    
    
}
