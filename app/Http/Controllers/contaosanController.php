<?php

namespace App\Http\Controllers;

use App\contaosan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class contaosanController extends Controller
{
    public function index()
    {
        return view('contaosan.index');
    }

    public function create(Request $request)
    {
        contaosan::create($request->all());
        $dt = Carbon::now();
        $data = $dt->toDateString();
        return back();
    }

    public function show()
    {
        $total = contaosan::all();
        return view('contaosan.view', compact('total'));
    }

    //! ida nee Mak Edit Husi
    public function edit($id){

        $edit = contaosan::find($id);
        return view('contaosan.contaosanedit',compact('edit'));


    }

    //! ida nee MakRohan Husi Edit

    //todo ida nee Mak update husi Conta Osan
    public function update( Request $request, $id){
         $update = contaosan::find($id);
         $update->update($request->all());
         return redirect('/contaosan/show')->with('success','Ita Boot Nia Conta Osan Update Ona');

    }

    //todo


    //? ida nee Mak nee Mak Delete

    public function destroy($id){

        $destroy = contaosan::find($id);
        $destroy->delete($destroy);
        return back();
    }

    //? ida nee Mak Roha Husi Delete


}
