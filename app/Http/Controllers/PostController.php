<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreIdeas;

use App\Post;

use Image;

use App\Category;

use DB;



class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
    // displaying recent posts
    public function index()
    {
        $posts = Post::latest()->paginate(5);
       

        return view('admin.useri', compact('posts'));
    }
    
    
    // gets the form for post create, and also retrives from the database the values for category.   
    public function create()
    {
        $categories = Category::all(['cat_title', 'id']);
                
        return view('posts.create', compact('categories', $categories));

    }
    
    
    // function to store ideas
//    public function store(StoreIdeas $request)
//    {
//        if($request->hasFile('file'))
//        {
//            $image = $request->file('file');
//            $filename = $image->getClientOriginalName();
//            $location = public_path('images/'.$filename);
//            Image::make($image)->save($location);
//        }
//        
//        auth()->user()->publish(
//          $post =  new Post(array(
//                
//                'title'  => $request->get('title'),
//                'body'   => $request->get('body'),
//                'cat_id' => $request->get('cat_id'),
//                'file'   => $location,
//                
//            ))
//        );
//        return back();
//
//    }


    
}
