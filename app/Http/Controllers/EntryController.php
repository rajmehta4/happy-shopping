<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class EntryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function s_entry() {
        return view('s_entry');
    }

    public function s_entry_success() {
        return view('s_entry_success');
    }

    public function s_submit(Request $request) {

        // preparation
        
        $brand = DB::table('brands')->select('id')->where('name', $request->input('brand'))->first();

        $ram = str_before($request->input('ram'), ' ');
        $in_storage = str_before($request->input('in_storage'), ' ');

        $path = $request->file('m_photo')->store('public/smartphones');
        $path = str_after($path, 'smartphones/');

        $slug = str_slug($request->input('name'));

        // database entry

        DB::table('smartphones')->insert(
            [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'brand' => $brand->id,
                'ram' => (int)$ram,
                'in_storage' => (int)$in_storage,
                'f_camera' => (int)$request->input('f_camera'),
                'r_camera' => (int)$request->input('r_camera'),
                'processor' => $request->input('processor'),
                'm_photo_path' => $path,
                'slug' => $slug
            ]
        );

        $phone = DB::table('smartphones')->select('id')->where('slug', $slug)->first();

        // all_products entry

        DB::table('all_products')->insert(
                    ['type' => 1, 'type_id' => $phone->id]
                );

        // more images

        foreach($request->file('m_photos') as $photo) {
            
            $path = $photo->store('public/smartphones');
            $path = str_after($path, 'smartphones/');

            DB::table('s_more_images')->insert(
                [
                    'path' => $path,
                    'smartphone_id' => $phone->id
                ]
            );
        }

        return redirect('smartphones/entry_success');
    }
}
