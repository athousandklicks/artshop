<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Sign_Location;
use Session;

class signLocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $sign_locations = Sign_Location::all();
    return view('administrator.sign-location.index', compact('sign_locations'));
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
        ));

        $sign_locations = new Sign_Location;
        $sign_locations->name = $request->name;
        $sign_locations->save();

        Session::flash('success', 'New Art sign location has been Created');

        return redirect()->route('sign-location.index');
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
        $sign_locations = Sign_Location::find($id);
        return view('administrator.sign-location.edit', compact('sign_locations'));
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
        $sign_locations = Sign_Location::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $sign_locations -> name = $request->input('name');
        $sign_locations -> save(); //save to the database
        Session::flash('success','Art sign location successfully updated'); //
        return redirect()->route('sign-location.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sign_locations = Sign_Location::find($id);
        $sign_locations->delete();
        Session::flash('success','Art sign location successfully deleted'); 
        return redirect()->route('sign-location.index');
    }
}
