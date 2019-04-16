<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Frame;
use Session;

class frameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $frames = Frame::all();
    return view('administrator.frame.index', compact('frames'));
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

        $frames = new Frame;
        $frames->name = $request->name;
        $frames->save();

        Session::flash('success', 'New Art Frame has been Created');

        return redirect()->route('frame.index');
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
        $frames = Frame::find($id);
        return view('administrator.frame.edit', compact('frames'));
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
        $frames = Frame::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $frames -> name = $request->input('name');
        $frames -> save(); //save to the database
        Session::flash('success','Art Frame successfully updated'); //
        return redirect()->route('frame.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $frames = Frame::find($id);
        $frames->delete();
        Session::flash('success','Art Frame successfully deleted'); 
        return redirect()->route('frame.index');
    }
}
