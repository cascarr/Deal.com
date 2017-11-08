<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIdeas;

use Illuminate\Http\Request;

use App\Post;

use Image;

use App\Category;

use DB;

use App\User;



use App\Comment;

use Session;


class UseriController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
    // displaying recent posts
//    public function index()
//    {
//        $posts = Post::latest()->paginate(2);
//       
//
//        return view('admin.useri', compact('posts'));
//    }
    
    
    // gets the form for post create, and also retrives from the database the values for category.   
//    public function create()
//    {
//        $categories = Category::all(['cat_title', 'id']);
//                
//        return view('posts.create', compact('categories', $categories));
//
//    }
    
    
    // function to store ideas
    public function store(StoreIdeas $request)
    {
        if($request->hasFile('file'))
        {
            $image = $request->file('file');
            $filename = $image->getClientOriginalName();
            $location = public_path('images/'.$filename);
            Image::make($image)->save($location);
        }
        
        auth()->user()->publish(
          $post =  new Post(array(
                
                'title'  => $request->get('title'),
                'body'   => $request->get('body'),
                'cat_id' => $request->get('cat_id'),
                'file'   => $location,
                
            ))
        );
        return redirect('/admin/useri');

    }
    
    
    
    // function to display individual post
    public function show($id)
    {
        $post = Post::find($id);
        
        
        return view('posts.show', compact('post', 'admins'));
    }
    
    
    // storing comments
    public function storeCom(Request $request, $post_id)
    {
        $this->validate($request, array(
            'body'  =>  'required|max:255',
            'email' =>  'required'
        ));
        
        $post = Post::find($post_id);
        
        
        $comment = new Comment();
        $comment->email = $request->email;
        $comment->body = $request->body;
        
        $comment->post()->associate($post);
        
        
        
        $comment->save();
        
        Session::flash('success', 'Comment added successfully!');
        
        //return redirect()->route('/admin/', [$post->slug]);
        return back();
    }



}
