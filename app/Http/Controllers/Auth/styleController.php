<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Style;
use Session;

class styleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $styles = Style::all();
    return view('administrator.style.index', compact('styles'));
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

        $styles = new Style;
        $styles->name = $request->name;
        $styles->save();

        Session::flash('success', 'New Art style has been Created');

        return redirect()->route('style.index');
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
        $styles = Style::find($id);
        return view('administrator.style.edit', compact('styles'));
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
        $styles = Style::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $styles -> name = $request->input('name');
        $styles -> save(); //save to the database
        Session::flash('success','Art style successfully updated'); //
        return redirect()->route('style.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $styles = Style::find($id);
        $styles->delete();
        Session::flash('success','Art style successfully deleted'); 
        return redirect()->route('style.index');
    }
}
