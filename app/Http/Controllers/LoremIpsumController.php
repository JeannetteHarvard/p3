<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoremIpsumController extends Controller
{

  public function index()
  {
      return view('lorem-ipsum.index');
  }

  public function generate(Request $request) {

      // First, validate the input data
    $this->validate($request, [
        'paragraphs' => 'required|numeric|min:1|max:33',
    ]);


      // if paragraphs is empty, still considered as empty string..
      $paragraphs = $request->input('paragraphs', '3');
      // $data = $request->all();
      // dd($paragraphs);

      return view('lorem-ipsum.generate')->with('paragraphs', $paragraphs);
      // return 'hi';
  }


}
