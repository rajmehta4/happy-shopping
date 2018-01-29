<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function s_entry() {
        return view('s_entry');
    }

    public function s_submit(Request $request) {

        // preparation
        
        $brand = DB::table('brands')->select('id')->where('name', $request->input('brand'))->first();

        $ram = str_before($request->input('ram'), ' ');
        $in_storage = str_before($request->input('in_storage'), ' ');

        $path = $request->file('m_photo')->store('public/smartphones');
        $path = str_after($path, 'smartphones/');

        // database entry

        DB::table('smartphones')->insert(
            [
                'name' => $request->input('name'),
                'brand' => $brand->id,
                'ram' => (int)$ram,
                'in_storage' => (int)$in_storage,
                'f_camera' => (int)$request->input('f_camera'),
                'r_camera' => (int)$request->input('r_camera'),
                'processor' => $request->input('processor'),
                'm_photo_path' => $path
            ]
        );

        // more images

        $id = DB::table('smartphones')->select('id')->where('name', $request->input('name'))->first();

        foreach($request->file('m_photos') as $photo) {
            $path = $photo->store('public/smartphones');

            DB::table('s_more_images')->insert(
                [
                    'path' => $path,
                    'smartphone_id' => $id->id
                ]
            );
        }

        return redirect('smartphones/entry_success');
    }

    public function s_entry_success(Request $request) {
        return view('s_entry_success');
    }
}
