<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QacController extends Controller
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
        $this->middleware('qac');
    }

    
    //
    public function index()
    {
        return view('admin.qac');
    }
}
