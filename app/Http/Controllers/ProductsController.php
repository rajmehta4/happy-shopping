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

	
    		return view('smartphone', [
    			'phone' => $phone,
    			'phone_images' => $phone_images,
    			'all_products_id' => $product->id
    		]);

    	}
    }

}