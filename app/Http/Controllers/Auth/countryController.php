<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Country;
use Session;

class countryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $countries = Country::all();
    return view('administrator.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'flag' => 'required|max:255',
        ));

        $countries = new Country;
        $countries->name = $request->name;

         $image=$request->flag;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/flags/', $imageName);
        $countries['flag']=$imageName;
      }
        
        $countries->save();

        Session::flash('success', 'New Country has been Created');

        return redirect()->route('country.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::find($id);
        return view('administrator.country.edit', compact('countries'));
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
        $countries = Country::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
            'flag' => 'required|max:255',
        ));

        $countries -> name = $request->input('name');

        if ($request->hasFile('flag')) {
        $flag=$request->flag;
        if($flag){
          $imageName=$flag->getClientOriginalName();
          $flag->move('images/flags/', $imageName);
          $countries['flag']=$imageName;
        }
      }

        $countries -> save(); //save to the database
        Session::flash('success','Country successfully updated'); //
        return redirect()->route('country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $countries = Country::find($id);
        $countries->delete();
        Session::flash('success','Country successfully deleted'); 
        return redirect()->route('country.index');
    }
}
