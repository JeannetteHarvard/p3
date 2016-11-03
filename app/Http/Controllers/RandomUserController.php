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

      // getting input parameters
      $users = $request->input('users', '3');
      $pictures = $request->input('pictures');
      $dateofbirth = $request->input('dateofbirth');
      $address = $request->input('address');
      $profile = $request->input('profile');

      return view('random-user.generate')
        ->with('users', $users)
        ->with('pictures', $pictures)
        ->with('dateofbirth', $dateofbirth)
        ->with('address', $address)
        ->with('profile', $profile);
  }

}
