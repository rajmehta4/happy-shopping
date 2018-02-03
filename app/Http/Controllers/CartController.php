<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_product(Request $request, $id) {

    if ($request->session()->has('cart')) {

    	if(in_array($id, session('cart'))) {
    		// do nothing
    	}

    	else {
    		$request->session()->push('cart', $id);
    	}

    }

    }

    public function display_cart(Request $request) {

    	foreach(session('cart') as $value) {
    		echo $value . '<br />';
    	}

    }

    public function remove_product(Request $request, $id) {

		if ($request->session()->has('cart')) {

			if(in_array($id, session('cart'))) {
				// remove it
			}

		}    	
    }
}