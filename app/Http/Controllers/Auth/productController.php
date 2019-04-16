<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
use Session;
use Purifier;


class productController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();
      return view('administrator.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $artists = Artist::pluck('name', 'name');
      $frames = Frame::pluck('name', 'name');
      $hangs = Hang::pluck('name', 'name');
      $signs = Sign::pluck('name', 'name');
      $sign_locations = Sign_Location::pluck('name', 'name');
      $supports = Support::pluck('name', 'name');
      $countries = Country::pluck('name', 'name');
      $types = Type::pluck('name', 'name');

      $tags = Tag::all();
      $styles = Style::all();
      $subjects = Subject::all();
      $mediums = Medium::all();
      //$types = Type::all();

      return view('administrator.product.create', compact('frames', 'hangs', 'signs', 'sign_locations', 'supports', 'tags', 'styles', 'subjects', 'types', 'mediums', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
      $this->validate($request, array(
        'title'=> 'required|max:1000',
        'artist'=> 'required|max:255',
        'brief_description'=> 'required|max:255',
        'price'=> 'required|between:0,99.99',
        'year_created'=> 'required|max:255',
        'framed'=> 'required|max:255',
        'hangable'=> 'required|max:255',
        'signed'=> 'required|max:255',
        'signature_locations'=> 'max:255',
        'support_type' => 'max:255',
        'height' => 'required|max:255',
        'width'=> 'required|max:255',
        'depth' => 'required|max:255',
        'weight' => 'required|max:255',
        'tags' => 'required|max:255',
        'styles' => 'required|max:255',
        'subjects' => 'required|max:255',
        'types' => 'required|max:255',
        'mediums' => 'required|max:255',
        'city' => 'required|max:255',
        'country' => 'required|max:255',
        'full_description' => 'required|max:100000',
        'image_front'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_back'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_leftside'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_rightside'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_hanged'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_gallery'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_1'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_2'=>'image|mimes:png,jpg,jpeg|max:100000',
        'video' => 'max:1000'
      ));

      $product = new Product;
      $product->sku = "PAAG".time();

      $sku = $product->sku;

      $product->title = $request->title;
      $product->artist = $request->artist;
      $product->brief_description = $request->brief_description;
      $product->price = $request->price;
      $product->year_created = $request->year_created;
      $product->framed = $request->framed;
      $product->hangable = $request->hangable;
      $product->signed = $request->signed;
      $product->signature_location = $request->signature_location;
      $product->support_type = $request->support_type;
      $product->height = $request->height;
      $product->width = $request->width;
      $product->depth = $request->depth;
      $product->weight = $request->weight;
      $product->city = $request->city;
      $product->country = $request->country;
      $product->types = $request->types;
      $product->full_description = Purifier::clean($request->full_description);
      $product->video = $request->video;


      $image=$request->image_front;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
        $product['image_front'] = preg_replace('/\s+/', '_', $imageName);
      }

      $image=$request->image_back;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
        $product['image_back'] = preg_replace('/\s+/', '_', $imageName);
      }

      $image=$request->image_leftside;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
        $product['image_leftside'] = preg_replace('/\s+/', '_', $imageName);
      }

      $image=$request->image_rightside;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
        $product['image_rightside'] = preg_replace('/\s+/', '_', $imageName);
      }

      $image=$request->image_hanged;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
        $product['image_hanged'] = preg_replace('/\s+/', '_', $imageName);
      }

      $image=$request->image_gallery;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
        $product['image_gallery'] = preg_replace('/\s+/', '_', $imageName);
      }

      $image=$request->image_1;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
        $product['image_1'] = preg_replace('/\s+/', '_', $imageName);
      }

      $image=$request->image_2;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
        $product['image_2'] = preg_replace('/\s+/', '_', $imageName);
      }

      $product->save();

      $product->tags()->sync($request->tags, false);
      $product->styles()->sync($request->styles, false);
      $product->subjects()->sync($request->subjects, false);
      $product->mediums()->sync($request->mediums, false);
      //$product->types()->sync($request->types, false);

      Session::flash('success', 'New product has been added');

      return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::find($id);
      return view('administrator.product.details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $products = Product::find($id);

      $frames = Frame::all();
      $hangs = Hang::all();
      $signs = Sign::all();
      $sign_locations = Sign_Location::all();
      $supports = Support::all();
      $countries = Country::all();

      $tags = Tag::all();
      $styles = Style::all();
      $subjects = Subject::all();
      $types = Type::all();
      $mediums = Medium::all();


      $_frames = array();
      foreach ($frames as $frame) {
        $_frames[$frame->name] = $frame->name;
      }

      $_hangs = array();
      foreach ($hangs as $hang) {
        $_hangs[$hang->name] = $hang->name;
      }

      $_signs = array();
      foreach ($signs as $sign) {
        $_signs[$sign->name] = $sign->name;
      }

      $_sign_locations = array();
      foreach ($sign_locations as $sign_location) {
        $_sign_locations[$sign_location->name] = $sign_location->name;
      }

      $_supports = array();
      foreach ($supports as $support) {
        $_supports[$support->name] = $support->name;
      }

      $_frames = array();
      foreach ($frames as $frame) {
        $_frames[$frame->name] = $frame->name;
      }

      $_countries = array();
      foreach ($countries as $country) {
        $_countries[$country->name] = $country->name;
      }

      $_types = array();
      foreach ($types as $type) {
        $_types[$type->name] = $type->name;
      }


      $tags2 = array();
      foreach ($tags as $tag) {
        $tags2[$tag->id] = $tag->name;
      }

      $styles2 = array();
      foreach ($styles as $style) {
        $styles2[$style->id] = $style->name;
      }


      $subjects2 = array();
      foreach ($subjects as $subject) {
        $subjects2[$subject->id] = $subject->name;
      }

      // $types2 = array();
      // foreach ($types as $type) {
      //   $types2[$type->id] = $type->name;
      // }


      $mediums2 = array();
      foreach ($mediums as $medium) {
        $mediums2[$medium->id] = $medium->name;
      }


      return view('administrator.product.edit', compact('products', '_frames', '_hangs', '_signs', '_sign_locations', '_supports', '_countries', 'tags2', 'styles2', 'subjects2', '_types', 'mediums2'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // dd($request);

      $product = Product::find($id);

      $this->validate($request, array(
        'title'=> 'required|max:1000',
        'artist'=> 'required|max:255',
        'brief_description'=> 'required|max:255',
        'price'=> 'required|between:0,99.99',
        'year_created'=> 'required|max:255',
        'framed'=> 'required|max:255',
        'hangable'=> 'required|max:255',
        'signed'=> 'required|max:255',
        'signature_locations'=> 'max:255',
        'support_type' => 'max:255',
        'height' => 'required|max:255',
        'width'=> 'required|max:255',
        'depth' => 'required|max:255',
        'weight' => 'required|max:255',
        'tags' => 'required|max:255',
        'styles' => 'required|max:255',
        'subjects' => 'required|max:255',
        'types' => 'required|max:255',
        'mediums' => 'required|max:255',
        'city' => 'required|max:255',
        'country' => 'required|max:255',
        'full_description' => 'required|max:100000',
        'image_front'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_back'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_leftside'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_rightside'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_hanged'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_gallery'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_1'=>'image|mimes:png,jpg,jpeg|max:100000',
        'image_2'=>'image|mimes:png,jpg,jpeg|max:100000',
        'video' => 'max:1000'
      ));

      $sku = $request->sku;

      $product->title = $request->input('title');
      $product->artist = $request->input('artist');
      $product->brief_description = $request->input('brief_description');
      $product->price = $request->input('price');
      $product->year_created = $request->input('year_created');
      $product->framed = $request->input('framed');
      $product->hangable = $request->input('hangable');
      $product->signed = $request->input('signed');
      $product->signature_location = $request->input('signature_location');
      $product->support_type = $request->input('support_type');
      $product->height = $request->input('height');
      $product->width = $request->input('width');
      $product->depth = $request->input('depth');
      $product->weight = $request->input('weight');
      $product->city = $request->input('city');
      $product->country = $request->input('country');
      $product->type = $request->input('type');

      $product->full_description = Purifier::clean($request->input('full_description'));
      $product->video = $request->input('video');

      if ($request->hasFile('image_front')) {
        $image=$request->image_front;
        if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
          $product['image_front'] = preg_replace('/\s+/', '_', $imageName);
        }
      }

      if ($request->hasFile('image_back')) {
        $image=$request->image_back;
        if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
          $product['image_back'] = preg_replace('/\s+/', '_', $imageName);
        }
      }

      if ($request->hasFile('image_leftside')) {
        $image=$request->image_leftside;
        if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
          $product['image_leftside'] = preg_replace('/\s+/', '_', $imageName);
        }
      }


      if ($request->hasFile('image_rightside')) {
        $image=$request->image_rightside;
        if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
          $product['image_rightside'] = preg_replace('/\s+/', '_', $imageName);
        }
      }


      if ($request->hasFile('image_hanged')) {
        $image=$request->image_hanged;
        if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
          $product['image_hanged'] = preg_replace('/\s+/', '_', $imageName);
        }
      }

      if ($request->hasFile('image_gallery')) {
        $image=$request->image_gallery;
        if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
          $product['image_gallery'] = preg_replace('/\s+/', '_', $imageName);
        }
      }

      if ($request->hasFile('image_1')) {
        $image=$request->image_1;
        if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
          $product['image_1'] = preg_replace('/\s+/', '_', $imageName);
        }
      }


      if ($request->hasFile('image_2')) {
        $image=$request->image_2;
        if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images/artworks/'.$sku, preg_replace('/\s+/', '_', $imageName));
          $product['image_2'] = preg_replace('/\s+/', '_', $imageName);
        }
      }


      $product->save();

      if (isset($request->tags)) {
        $product->tags()->sync($request->tags);
      } else {
        $product->tags()->sync(array());
      }

      if (isset($request->styles)) {
        $product->styles()->sync($request->styles);
      } else {
        $product->styles()->sync(array());
      }

      if (isset($request->subjects)) {
        $product->subjects()->sync($request->subjects);
      } else {
        $product->subjects()->sync(array());
      }

      // if (isset($request->types)) {
      //   $product->types()->sync($request->types);
      // } else {
      //   $product->types()->sync(array());
      // }

      if (isset($request->mediums)) {
        $product->mediums()->sync($request->mediums);
      } else {
        $product->mediums()->sync(array());
      }

      Session::flash('success', 'Product Details has been Updated!');
      return redirect()->route('product.show', $product->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->tags()->detach();
        $product->styles()->detach();
        $product->subjects()->detach();
        // $product->types()->detach();
        $product->mediums()->detach();

        $product->delete();

        Session::flash('success', 'The Product was successfully deleted.');
        return redirect()->route('product.index');
    }
  }
