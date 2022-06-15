<?php

namespace App\Http\Controllers;

use App\durasaun;
use App\textdurasaun;
use Illuminate\Http\Request;

class durasaunController extends Controller
{
    public function index()
    {
        $data = durasaun::with('user')->OrderBy('tempo','ASC')->get();
        $text = textdurasaun::get();
        return view('durasaun.durasaun_index',compact('data','text'));

    }

    public function create(Request $request){
        durasaun::create($request->all());
        return back()->with('success','Ita Boot Aumenta Osan Durasaun Foun');
    }

    public function edit($id){
        $edit = durasaun::find($id);
        return view('durasaun.duarsaun_edit',compact('edit'));
    }

    public function update(Request $request, $id){
        $edit = durasaun::find($id);
        $edit->update($request->all());
        return redirect('setting/durasaun')->with('success','Dados Durasaun Update Ona');
    }
    //! ida nee Mak Delete
    public function destroy($id){
        $delete = durasaun::find($id);
        $delete->delete($delete);

        return back()->with('warning','Dados Duarsaun Delete Ona');

    }

    //! ida nee Mak Rohan Husi Delete


}










