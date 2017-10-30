<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.qam');
    }
    
    
    public function test()
    {
        return view('admin.text');
    }
}
