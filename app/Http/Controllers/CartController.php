<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_product($id) {

    	$user = Auth::user();
    	$user_id = Auth::id();

    	$check = DB::table('cart')
    		->select()
    		->where('user_id', $user_id)
    		->where('p_id', $id)
    		->first();

    	if($check == null) {	

    		DB::table('cart')->insert(
    			[
    			'user_id' => $user_id,
    			'p_id' => $id
    			]
    		);

    		return response('Item added to cart successfully!');

    	}
    }

    public function display_cart() {

    	$user = Auth::user();
    	$id = Auth::id();

    	$cart = DB::table('cart')->select('p_id')->where('user_id', $id)->get();

    	return view('cart', [
    		'cart' => $cart
    	]);

    }

    public function remove_product($id) {

    	$user = Auth::user();
    	$user_id = Auth::id();

    	$check = DB::table('cart')
    		->select()
    		->where('user_id', $user_id)
    		->where('p_id', $id)
    		->first();

    	if($check == null) {	
	  		// do nothing
    	}

    	else {

    		DB::table('cart')
    			->where('user_id', $user_id)
    			->where('p_id', $id)
    			->delete();

    		return response('Item removed from cart successfully!');
    	}
	}
}