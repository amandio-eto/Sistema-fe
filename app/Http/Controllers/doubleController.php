<?php

namespace App\Http\Controllers;

use App\credito;
use App\double;
use App\durasaun;
use App\osanfunan;
use App\tbtsm;
use Illuminate\Http\Request;

class doubleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
     {
        $credito = credito::all();
        $doubles = double::with('credito','durasaun')->get();
        $durasaun = durasaun::OrderBy('tempo','ASC')->get();
        $osanfunan = osanfunan::all();

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
       return back()->with('success','Cliente Nia Dados Credito nee Cria Ona');

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


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doubles = double::find($id);
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
        $doubles = double::find($id);
        $doubles->update($request->all());
        return back()->with('success','Ita Boot Nia Dados Credito Update Ona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doubles = double::find($id);
        $doubles->delete($doubles);
        return back()->with('success','Cliente Nia Dados Hamos Ona');
    }
}
