<?php

namespace App\Http\Controllers;

use App\avisu;
use Illuminate\Http\Request;
use ParagonIE\Sodium\Compat;
use Symfony\Component\VarDumper\Cloner\Data;

class avisuController extends Controller
{




    public function index()
    {
        return view('avisu.avisu');
    }

    public function view()
    {
        $data = avisu::all();
        return view('avisu.view', compact('data'));
    }

    public function create(Request $request)
    {
        $data = avisu::create($request->all());
        return redirect('/avisu/view')->with('success', "Ita Boot Nia Avisu Halo Halo Ona");
    }
    public function edit($id)
    {
        $data = avisu::find($id);
        return view('avisu.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = avisu::find($id);
        $data->update($request->all());
        return redirect('/avisu/view')->with('success', "Ita Bo'ot Nia Avisu Update Ona Ho Successo");
    }

    public function delete($id)
    {
        $data = avisu::find($id);
        $data->delete($data);
        return redirect('/avisu/view')->with('success', "Ita Bo'ot Nia Avisu Hamos Ona Ho Successo");
    }
}
