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
        // preparation
        
        $brand = DB::table('brands')->select('id')->where('name', $request->input('brand'))->get();

        $ram = str_before($request->input('ram'), ' ');
        $in_storage = str_before($request->input('in_storage'), ' ');

        $path = $request->file('m_photo')->store('public/smartphones');
        $path = str_after($path, 'smartphones/');

        // database entry

        DB::table('smartphones')->insert(
            [
                'name' => $request->input('name'),
                'brand' => (int)$brand,
                'ram' => (int)$ram,
                'in_storage' => (int)$in_storage,
                'f_camera' => (int)$request->input('f_camera'),
                'r_camera' => (int)$request->input('r_camera'),
                'processor' => $request->input('processor'),
                'm_photo' => $path
            ]
        );

        // more images

        $id = DB::table('smartphones')->select('id')->where('name', $request->input('name'))->get();

        foreach($request->file('m_photos') as $photo) {
            $path = $photo->store('public/smartphones');

            DB::table('s_more_images')->insert(
                [
                    'path' => $path,
                    'smartphone_id' => (int)$id
                ]
            );
        }
    }
}
