<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomUserController extends Controller
{

  public function index()
  {
      return view('random-user.index');
  }

}
