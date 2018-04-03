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

    		return view('pages/cart_add');

    	}
    }

    public function display_cart() {

    	$user = Auth::user();
    	$id = Auth::id();

    	$cart = DB::table('cart')->where('user_id', $id)->get();

      $mob = DB::table('all_products')
            ->join('smartphones', 'all_products.type_id', '=', 'smartphones.id')
            ->join('cart', 'all_products.id', '=', 'cart.p_id')
            ->select('smartphones.*')
            ->where('user_id', $id)
            ->get();

      $lap = DB::table('all_products')
            ->join('laptops', 'all_products.type_id', '=', 'laptops.id')
            ->join('cart', 'all_products.id', '=', 'cart.p_id')
            ->select('laptops.*')
            ->where('user_id', $id)
            ->get();

      $eph = DB::table('all_products')
            ->join('earphones', 'all_products.type_id', '=', 'earphones.id')
            ->join('cart', 'all_products.id', '=', 'cart.p_id')
            ->select('earphones.*')
            ->where('user_id', $id)
            ->get();


    	return view('pages/cart', [
    		'mob' => $mob,
        'lap' => $lap,
        'eph' => $eph
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

    		return view('pages/cart_remove');
    	}
	}
}
