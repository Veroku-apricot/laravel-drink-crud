<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drink;

class MainController extends Controller
{
    public function index() {

      $drinks = Drink::all();
      return view('pages.home', compact('drinks'));

    }
}
