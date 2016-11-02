<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomUserController extends Controller
{

  public function index()
  {
      return view('random-user.index');
  }



  public function generate(Request $request) {

      // First, validate the input data
    $this->validate($request, [
        'users' => 'required|numeric|min:1|max:33',
    ]);


      // if paragraphs is empty, still considered as empty string..
      $users = $request->input('users', '3');
      // $data = $request->all();
      // dd($paragraphs);

      return view('random-user.generate')->with('users', $users);
      // return 'hi';
  }

}
