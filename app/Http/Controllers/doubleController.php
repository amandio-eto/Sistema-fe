<?php

namespace App\Http\Controllers;

use App\credito;
use App\double;
use App\durasaun;
use App\osanfunan;
use Illuminate\Http\Request;

class doubleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $credito =credito::all();
        $durasaun = durasaun::OrderBy('tempo','ASC')->get();
        $osanfunan = osanfunan::all();
         $doubles = double::with('credito','durasaun')->get();

        //  $totalcredito = $osaninan + ();
        return view('double.index_double',compact('credito','durasaun','osanfunan','doubles'));
    }

    /**

     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //todo Ida nee mak Create Double
       double::create(request()->all());


        return back();
        //todo Ida nee Mak Roha Husi Creat Double
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return 'amandii';
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
