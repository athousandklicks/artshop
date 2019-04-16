<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Hang;
use Session;

class hangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    } 

    public function index()
    {
        $hangs = Hang::all();
    return view('administrator.hang.index', compact('hangs'));
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

        $hangs = new Hang;
        $hangs->name = $request->name;
        $hangs->save();

        Session::flash('success', 'New Hang has been Created');

        return redirect()->route('hang.index');
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
        $hangs = Hang::find($id);
        return view('administrator.hang.edit', compact('hangs'));
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
        $hangs = Hang::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $hangs -> name = $request->input('name');
        $hangs -> save(); //save to the database
        Session::flash('success','Art hang successfully updated'); //
        return redirect()->route('hang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hangs = Hang::find($id);
        $hangs->delete();
        Session::flash('success','Art hang successfully deleted'); 
        return redirect()->route('hang.index');
    }
}
