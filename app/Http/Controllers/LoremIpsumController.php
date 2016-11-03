<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Magyarjeti\LaravelLipsum\LipsumFacade as Lipsum;

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

      // getting input parameters
      $paragraphs = $request->input('paragraphs', '3');
      $paragraphsize = $request->input('paragraphsize');
      $linkorlist = $request->input('linkorlist');

      // dd($paragraphsize);
      switch ($paragraphsize) {
        case "short":
          $text = Lipsum::short()->html($paragraphs);
          if($linkorlist == "link") {
            $text = Lipsum::link()->short()->html($paragraphs);
          } elseif ($linkorlist == "list") {
            $text = Lipsum::ul()->short()-> html($paragraphs);
          }
          break;
        case "medium":
          $text = Lipsum::medium()->html($paragraphs);
          if($linkorlist == "link") {
            $text = Lipsum::link()->medium()->html($paragraphs);
          } elseif ($linkorlist == "list") {
            $text = Lipsum::ul()->medium()-> html($paragraphs);
          }
          break;
        case 'long':
          $text = Lipsum::verylong()->html($paragraphs);
          if($linkorlist == "link") {
            $text = Lipsum::link()->verylong()->html($paragraphs);
          } elseif ($linkorlist == "list") {
            $text = Lipsum::ul()->verylong()-> html($paragraphs);
          }
          break;
        default:
          $text = Lipsum::html(3);
      }

      return view('lorem-ipsum.generate')
        // ->with('paragraphs', $paragraphs)
        // ->with('paragraphsize', $paragraphsize)
        // ->with('link', $link)
        // ->with('list', $list)
        ->with('text', $text);


      // return view('lorem-ipsum.generate')->with('paragraphs', $paragraphs);
      // return 'hi';
  }


}
