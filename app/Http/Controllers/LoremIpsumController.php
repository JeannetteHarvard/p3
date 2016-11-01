<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoremIpsumController extends Controller
{

  public function index()
  {
      return view('lorem-ipsum.index');
  }

}
