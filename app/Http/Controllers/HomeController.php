<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

// use \Input as Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function homepage() {

      //-------phones-------//
      $phone1 = DB::table('smartphones')->select()->where('slug', 'apple-iphone-x-64-gb')->first();
      $phone2 = DB::table('smartphones')->select()->where('slug', 'oneplus-5t-128-gb')->first();
      //=======phones======//

      //-------Laptops-------//
      $laps1 = DB::table('laptops')->select()->where('slug', 'dell-inspiron-7570')->first();
      $laps2 = DB::table('laptops')->select()->where('slug', 'hp-15')->first();
      //=======Laptops======//

      //-------Earphones-------//
      $ephone1 = DB::table('earphones')->select()->where('slug', 'mdr-xb55-extrabass')->first();
      $ephone2 = DB::table('earphones')->select()->where('slug', 'cx-180-street-2')->first();
      //=======Earphones======//

      return view('pages.homepage', [
        'phone1' => $phone1,
        'phone2' => $phone2,
        'laps1' => $laps1,
        'laps2' => $laps2,
        'ephone1' => $ephone1,
        'ephone2' => $ephone2
      ]);


    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

}
