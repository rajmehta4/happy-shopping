<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class L_EntryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /*public function s_entry() {
        return view('s_entry');
    }*/

    public function l_submit(Request $request) {

        // preparation

        $brand = DB::table('brands')->select('id')->where('name', $request->input('brand'))->first();

        $ram = str_before($request->input('ram'), ' ');
        $hdd_capacity = str_before($request->input('hdd_capacity'), ' ');

        $path = $request->file('m_photo')->store('public/laptops');
        $path = str_after($path, 'laptops/');

        $slug = str_slug($request->input('name'));

        // database entry

        DB::table('laptops')->insert(
            [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'brand' => $brand->id,
                'ram' => (int)$ram,
                'hdd_capacity' => (int)$hdd_capacity,
                'processor' => $request->input('processor'),
                'graphics_card' => $request->input('graphics_card'),
                'os' => $request->input('os'),
                'm_photo_path' => $path,
                'slug' => $slug
            ]
        );

        $laptop = DB::table('laptops')->select('id')->where('slug', $slug)->first();

        // all_products entry

        DB::table('all_products')->insert(
                    ['type' => 1, 'type_id' => $laptop->id]
                );

        // more images

        foreach($request->file('m_photos') as $photo) {

            $path = $photo->store('public/laptops');
            $path = str_after($path, 'laptops/');

            DB::table('l_more_images')->insert(
                [
                    'path' => $path,
                    'laptop_id' => $laptop->id
                ]
            );
        }

        return redirect('laptops/entry_success');
    }
}
