<?php

namespace App\Http\Controllers;

use App\credito;
use App\osanfunan;
use App\setoran;
use Illuminate\Http\Request;

class setoranController extends Controller
{
    public function index()
    {
        //**! ida nee Usa Ba Update Setora Data Iha Base Dados  */
        $data = credito::get();
        return view('setoran.setoran', compact('data'));
    }
    public function create(Request $request)
    {
        $data = setoran::create($request->all());
        return redirect('/Dadoscredito')->with('success', 'Ita Boot Nia Dados nia Cria Ona ho Successo');
    }

    //! ida nee Mak Delete Husi Husi Sistema



    //todo ida nee Mak Edit Husi Setoran Nian

    public function edit($id)
    {

        $data = credito::all();
        $edit =  setoran::find($id);

        return view('setoran.edit', compact('data', 'edit'));
    }

    public function update(Request $request, $id)
    {


        $edit =  setoran::find($id);
        $edit->update($request->all());
        return redirect('/Dadoscredito')->with('success', 'Ita Boot Nia Dados Update Ona Ho Sucesso');
    }
    public function delete($id)
    {

        $delete =  setoran::find($id);
        $delete->delete($delete);
        $osan = osanfunan::all();
        return redirect('/Dadoscredito')->with('success', 'Ita Boot Nia Dados Hamos Oan Ho Sucesso');
    }


    //todo ida nee Mak Nia Rohan Husi Setoran
}
