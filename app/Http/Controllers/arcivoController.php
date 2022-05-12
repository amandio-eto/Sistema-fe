<?php

namespace App\Http\Controllers;

use App\arcivo;
use App\avisu;
use App\credito;
use Illuminate\Http\Request;

class arcivoController extends Controller
{


    public function index()
    {

        $data = credito::all();
        return view('arquivo.index', compact('data'));
    }
    public function show()
    {



        $data = arcivo::all();
        return view('arquivo.show', compact('data'));
    }

    //! ida nee Mak Create Husi file Arquivo
    public function create(Request $request)
    {
        $data = arcivo::create($request->all());

        if ($request->hasFile('arcivo')) {

            $request->file('arcivo')->move('images/', $request->file('arcivo')->getClientOriginalName());
            $data->arcivo =  $request->file('arcivo')->getClientOriginalName();
            $data->save();
        }
        return redirect('/arquivo/show')->with('success', 'Ita Nia Arquivo Hatama Ona Base Dados ho Successo');
    }


    //! ida nee Mak Rohan husi Arquivo

    //todo ida nee Mak Delete

    public function delete($id)
    {
        $data = arcivo::find($id);
        $data->delete($data);
        return redirect('/arquivo/show')->with('success', 'Ita Nia Arquivo Hamos Ona Ho Sucesso');
    }

    //? ida nee Mak Update Husi Sistema

    public function edit($id)
    {

        return view('arquivo.edit', compact('edit'));
    }


    //? ida nee Mak Rohan Husi Update Husi SIstema Arquivo
}
