<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

// use \Input as Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('home');
    }

    public function s_entry()
    {
        return view('s_entry');
    }

    public function s_submit(Request $request)
    {
        if(request()->hasFile('m_photo')) {
            $path = $request->file('m_photo')->store('public/smartphones');
            echo $path;
        }
    }
}
