<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Subject;
use Session;

class subjectController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $subjects = Subject::all();
    return view('administrator.subject.index', compact('subjects'));
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

        $subjects = new Subject;
        $subjects->name = $request->name;
        $subjects->save();

        Session::flash('success', 'New Art subject has been Created');

        return redirect()->route('subject.index');
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
        $subjects = Subject::find($id);
        return view('administrator.subject.edit', compact('subjects'));
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
        $subjects = Subject::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $subjects -> name = $request->input('name');
        $subjects -> save(); //save to the database
        Session::flash('success','Art subject successfully updated'); //
        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subjects = Subject::find($id);
        $subjects->delete();
        Session::flash('success','Art subject successfully deleted'); 
        return redirect()->route('subject.index');
    }
}
