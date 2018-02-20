<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class E_EntryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function e_submit(Request $request) {

        // preparation

        $brand = DB::table('brands')->select('id')->where('name', $request->input('brand'))->first();

        $driver_size = str_before($request->input('driver_size'), ' ');
        $sensitivity = str_before($request->input('sensitivity'), ' ');

        $path = $request->file('m_photo')->store('public/earphones');
        $path = str_after($path, 'earphones/');

        $slug = str_slug($request->input('name'));

        // database entry

        DB::table('earphones')->insert(
            [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'brand' => $brand->id,
                'driver_size' => (int)$driver_size,
                'sensitivity' => (int)$sensitivity,
                'impedance' => (int)$request->input('impedance'),
                'waterproof' => $request->input('waterproof'),
                'm_photo_path' => $path,
                'slug' => $slug
            ]
        );

        $ephone = DB::table('earphones')->select('id')->where('slug', $slug)->first();

        // all_products entry

        DB::table('all_products')->insert(
                    ['type' => 1, 'type_id' => $ephone->id]
                );

        // more images

        foreach($request->file('m_photos') as $photo) {

            $path = $photo->store('public/earphones');
            $path = str_after($path, 'earphones/');

            DB::table('e_more_images')->insert(
                [
                    'path' => $path,
                    'earphone_id' => $ephone->id
                ]
            );
        }

        return redirect('earphones/entry_success');
    }
}
