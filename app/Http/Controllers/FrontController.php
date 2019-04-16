<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Artist;
use App\Frame;
use App\Hang;
use App\Medium;
use App\Sign;
use App\Sign_Location;
use App\Style;
use App\Subject;
use App\Support;
use App\Tag;
use App\Type;
use App\Country;


class FrontController extends Controller
{

    public function index()
    {
     $artworks = Product::all();
     return view('Frontend.gallery', compact('artworks'));
 }

 public function show($id)
 {
  $artwork = Product::find($id);
  return view('Frontend.details', compact('artwork'));
}

public function paintings()
{
 $artworks = Product::where('type', '=', 'painting')->get();
 return view('Frontend.gallery', compact('artworks'));
}

public function drawings()
{
 $artworks = Product::where('type', '=', 'drawing')->get();
 return view('Frontend.gallery', compact('artworks'));
}

public function sculptures()
{
 $artworks = Product::where('type', '=', 'sculpture')->get();
 return view('Frontend.gallery', compact('artworks'));
}

public function digitals()
{
 $artworks = Product::where('type', '=', 'digital')->get();
 return view('Frontend.gallery', compact('artworks'));
}

public function photographys()
{
 $artworks = Product::where('type', '=', 'photography')->get();
 return view('Frontend.gallery', compact('artworks'));
}

public function Prints()
{
 $artworks = Product::where('type', '=', 'Print')->get();
 return view('Frontend.gallery', compact('artworks'));
}

public function search(Request $request)
{
	$query = $request->search;
 $artworks = Product::where('type', 'LIKE', '%' . $query . '%')->get();
 return view('Frontend.gallery', compact('artworks', 'query'));
}

}
