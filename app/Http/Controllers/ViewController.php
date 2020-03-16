<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
      $data = [
        [
          'img_path' => "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
          'Title' => "New Jersey",
          'Artist' => "Bon Jovi",
          'Year' => "1988"
        ],
        [
          'img_path' => "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
          'Title' => "Live at Wembley 86",
          'Artist' => "Queen",
          'Year' => "1992"
        ],
        [
          'img_path' => "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
          'Title' => "Ten's Summoner's Tales",
          'Artist' => "Sting",
          'Year' => "1993"
        ],
        [
          'img_path' => "https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg",
          'Title' => "Steve Gadd band",
          'Artist' => "Steve Gadd band",
          'Year' => "2018"
        ],
        [
          'img_path' => "https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg",
          'Title' => "Brave new World",
          'Artist' => "Iron Maiden",
          'Year' => "2000"
        ],
        [
          'img_path' => "https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg",
          'Title' => "One more car, one more rider",
          'Artist' => "Eric Clapton",
          'Year' => "2002"
        ],
      ];
      return view('cds', compact('data'));
    }
}
