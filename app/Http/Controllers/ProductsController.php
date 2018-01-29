<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ProductsController extends Controller
{
    public function smartphones($slug) {

    	$result = DB::table('smartphones')->select()->where('slug', $slug)->first();
    	
    	if($result == null) {
    		// throw 404 error
    	}

    	else {

    		$images = DB::table('s_more_images')->select('path')->where('smartphone_id', $result->id);

    		foreach($images as $image) {
    			echo $image->path;
    		}

			/*    		
    		return view('smartphone', [
    			'result' => $result;
    		]);
    		*/
    	}
    }
}
