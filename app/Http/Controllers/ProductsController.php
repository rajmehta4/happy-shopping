<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ProductsController extends Controller
{
    public function smartphones($slug) {

    	$phone = DB::table('smartphones')->select()->where('slug', $slug)->first();
    	
    	if($phone == null) {
    		// throw 404 error
    	}

    	else {

    		$phone_images = DB::table('s_more_images')->select('path')->where('smartphone_id', $phone->id)->get();

			    		
    		return view('smartphone', [
    			'phone' => $phone,
    			'phone_images' => $phone_images
    		]);

    	}
    }
}
