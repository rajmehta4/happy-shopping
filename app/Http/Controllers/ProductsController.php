<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


class ProductsController extends Controller
{

    public function smartphones($slug) {

    	$phone = DB::table('smartphones')->select()->where('slug', $slug)->first();

    	if($phone == null) {
    		// throw 404 error
    	}

    	else {

    		if (Auth::check()) {
    		    $user = Auth::user();
    		    $id = Auth::id();

    		    $product = DB::table('all_products')
    		    			->select()
    		    			->where('type', 1)
    		    			->where('type_id', $phone->id)
    		    			->first();

    		    $check = DB::table('browsing_hist')
    		    			->select()
    		    			->where('user_id', $id)
    		    			->where('p_id', $product->id)
    		    			->first();

    		    if($check == null) {

    		    	DB::table('browsing_hist')->insert(
    		        	[
    		        		'user_id' => $id,
    		        		'p_id' => $product->id
    		        	]
    		    );

    			}
    		}

    		$phone_images = DB::table('s_more_images')->select('path')->where('smartphone_id', $phone->id)->get();

        $phone_brand = DB::table('brands')->select('name')->where('id', $phone->brand)->first();

    		return view('pages.smartphone', [
    			'phone' => $phone,
    			'phone_images' => $phone_images,
    			'all_products_id' => $product->id,
          'brand' => $phone_brand
    		]);

    	}
    }


    //laptops

    public function laptops($slug) {

    	$laps = DB::table('laptops')->select()->where('slug', $slug)->first();

    	if($laps == null) {
    		// throw 404 error
    	}

    	else {

    		if (Auth::check()) {
    		    $user = Auth::user();
    		    $id = Auth::id();

    		    $product = DB::table('all_products')
    		    			->select()
    		    			->where('type', 1)
    		    			->where('type_id', $laps->id)
    		    			->first();

    		    $check = DB::table('browsing_hist')
    		    			->select()
    		    			->where('user_id', $id)
    		    			->where('p_id', $product->id)
    		    			->first();

    		    if($check == null) {

    		    	DB::table('browsing_hist')->insert(
    		        	[
    		        		'user_id' => $id,
    		        		'p_id' => $product->id
    		        	]
    		    );

    			}
    		}

    		$laps_images = DB::table('l_more_images')->select('path')->where('laptop_id', $laps->id)->get();

        $laps_brand = DB::table('brands')->select('name')->where('id', $laps->brand)->first();

    		return view('pages.laptop', [
    			'laps' => $laps,
    			'laps_images' => $laps_images,
    			'all_products_id' => $product->id,
          'brand' => $laps_brand
    		]);

    	}
    }

//earphones

public function earphones($slug) {

  $ephone = DB::table('earphones')->select()->where('slug', $slug)->first();

  if($ephone == null) {
    // throw 404 error
  }

  else {

    if (Auth::check()) {
        $user = Auth::user();
        $id = Auth::id();

        $product = DB::table('all_products')
              ->select()
              ->where('type', 1)
              ->where('type_id', $ephone->id)
              ->first();

        $check = DB::table('browsing_hist')
              ->select()
              ->where('user_id', $id)
              ->where('p_id', $product->id)
              ->first();

        if($check == null) {

          DB::table('browsing_hist')->insert(
              [
                'user_id' => $id,
                'p_id' => $product->id
              ]
        );

      }
    }

    $ephone_images = DB::table('e_more_images')->select('path')->where('earphone_id', $ephone->id)->get();

    $ephone_brand = DB::table('brands')->select('name')->where('id', $ephone->brand)->first();


    return view('pages.earphone', [
      'ephone' => $ephone,
      'ephone_images' => $ephone_images,
      'all_products_id' => $product->id,
      'brand' => $ephone_brand
    ]);

  }
}


}
