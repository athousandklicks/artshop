<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Support;
use Session;

class supportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    $supports = Support::all();
    return view('administrator.support.index', compact('supports'));
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

        $supports = new Support;
        $supports->name = $request->name;
        $supports->save();

        Session::flash('success', 'New Art support has been Created');

        return redirect()->route('support.index');
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
        $supports = Support::find($id);
        return view('administrator.support.edit', compact('supports'));
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
        $supports = Support::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $supports -> name = $request->input('name');
        $supports -> save(); //save to the database
        Session::flash('success','Art support successfully updated'); //
        return redirect()->route('support.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supports = Support::find($id);
        $supports->delete();
        Session::flash('success','Art support successfully deleted'); 
        return redirect()->route('support.index');
    }
}
