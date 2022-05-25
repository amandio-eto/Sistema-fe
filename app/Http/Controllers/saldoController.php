<?php

namespace App\Http\Controllers;

use App\saldo;
use App\saldoosan;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class saldoController extends Controller
{
    public function index()
    {

        $data = saldo::all();
        return view('saldo.saldo', compact('data'));
    }
    public function create(Request $request)
    {

        $data = saldo::create($request->all());
        return redirect('/setting/osan')->with('success', 'ita Boot nia Saldo Aumenta Ona ho Sucesso');
    }

    public function edit($id)
    {


        $data = saldo::find($id);
        return view('saldo.editsaldo', compact('data'));
    }
    public function update(Request $request, $id)
    {


        $data = saldo::find($id);
        $data->update($request->all());
        return redirect('/setting/osan')->with('success', 'ita Boot nia Saldo Update Ona ho Sucesso');
    }
    public function delete($id)
    {


        $data = saldo::find($id);
        $data->delete($data);
        return redirect('/setting/osan')->with('success', 'ita Boot nia Saldo Hamos Ona ho Sucesso');
    }
}
