<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use Validator;

use DB;

class QamController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        
        // from the kernel registration
        $this->middleware('qam', ['except'=>'test']);
    }
    
    
    //
    public function index()
    {
        $categories = Category::paginate(2);
        
        return view('admin.qam', compact('categories'));
    }
    
    
    public function test()
    {
        return view('admin.text');
    }
    
    
    public function create()
    {
        return view('admin.cat');
    }
    
    
    public function store(Request $request)
    {
        
        $categories = new Category;
        $categories->cat_title = $request->cat_title;
        $categories->save();
        
        return redirect('/admin/qam');
        
    }
    
    
    public function edit($id)
    {
        $categories = Category::find($id);
        
        return view('admin.editcat')->with('categories', $categories);
    }
    
    
        // processes the editcat form
    public function updateCategory($id, Request $request)
    {

        $categories = Category::find($id);
                
        

        $categories->cat_title = $request->cat_title;
       
        $categories->save();
        
        
        
        return redirect('/admin/qam');
    }

    
    // processes the delete of categories
    public function destroy($id)
    {
        $categories = Category::find($id);
        
        $categories->delete($id);
        
        return redirect('/admin/qam');
    }

    
}
