<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fear;
use Session;

class FearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fears = Fear::orderBy('id', 'desc')->paginate(25);
        return view('fears.index')->withFears($fears);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fears.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data 
        $this->validate($request, [
            'content' => 'required'
        ]);

        // store in the database
        $fear = new Fear;
        $fear->content = $request->content;
        
        $fear->save();

        Session::flash('success', 'Your fear was successfully save!!');
        // redirect to the show or index
        return redirect()->route('fears.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fear = Fear::find($id);
        return view('fears.show')->withFear($fear);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
