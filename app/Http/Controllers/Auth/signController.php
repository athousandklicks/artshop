<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Sign;
use Session;

class signController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $signs = Sign::all();
    return view('administrator.sign.index', compact('signs'));
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

        $signs = new Sign;
        $signs->name = $request->name;
        $signs->save();

        Session::flash('success', 'New Art sign has been Created');

        return redirect()->route('sign.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $signs = Sign::find($id);
        return view('administrator.sign.edit', compact('signs'));
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
        $signs = Sign::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $signs -> name = $request->input('name');
        $signs -> save(); //save to the database
        Session::flash('success','Art sign successfully updated'); //
        return redirect()->route('sign.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $signs = Sign::find($id);
        $signs->delete();
        Session::flash('success','Art sign successfully deleted'); 
        return redirect()->route('sign.index');
    }
}
