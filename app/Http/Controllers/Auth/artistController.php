<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artist;
use Session;
use Auth;

class artistController extends Controller
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
        //
    }

    public function create()
    {
        return view('administrator.artist.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
        'name'=> 'required|max:255',
        'about'=> 'required|max:10000',
        'cv'=> 'max:10000',
        'exhibitions'=> 'max:10000',
        'mentors' => 'max:5000',
        'tags'=> 'max:255',
        'image'=>'image|mimes:png,jpg,jpeg|max:10000',
        
      ));

      $artist = new Artist;

      $artist->name = $request->name;
      $artist->about = $request->about;
      $artist->cv = $request->cv;
      $artist->exhibitions = $request->exhibitions;
      $artist->mentors = $request->mentors;
      $artist->tags = $request->tags;

      $avatar=$request->image;
        if($avatar){
          $imageName=$avatar->getClientOriginalName();
          $avatar->move('images/artistes/', $imageName);
          $artist['image']=$imageName;
        }

    $artist->save();

    Session::flash('success', 'New Art Work has been Added');

    return redirect()->route('artist.show', $artist->id);

    }


    public function show($id)
    {
        return view('administrator.artist.details');
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
