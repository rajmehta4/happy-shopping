<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

  public function cart() {
      return view('pages.cart');
  }

  public function entry_success() {
      return view('pages.entry_success');
  }

  public function homepage() {
      return view('pages.homepage');
  }

  public function l_entry() {
      return view('pages.l_entry');
  }

  public function s_entry() {
      return view('pages.s_entry');
  }

  public function e_entry() {
      return view('pages.e_entry');
  }

  public function smartphones() {
      return view('pages.smartphone');
  }

  public function earphone() {
      return view('pages.earphone');
  }

  public function welcome() {
      return view('pages.welcome');
  }
}
