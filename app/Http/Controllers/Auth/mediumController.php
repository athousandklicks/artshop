<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Medium;
use Session;

class mediumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $mediums = Medium::all();
    return view('administrator.medium.index', compact('mediums'));
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

        $mediums = new Medium;
        $mediums->name = $request->name;
        $mediums->save();

        Session::flash('success', 'New Art medium has been Created');

        return redirect()->route('medium.index');
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
        $mediums = Medium::find($id);
        return view('administrator.medium.edit', compact('mediums'));
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
        $mediums = Medium::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $mediums -> name = $request->input('name');
        $mediums -> save(); //save to the database
        Session::flash('success','Art medium successfully updated'); //
        return redirect()->route('medium.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mediums = Medium::find($id);
        $mediums->delete();
        Session::flash('success','Art medium successfully deleted'); 
        return redirect()->route('medium.index');
    }
}
