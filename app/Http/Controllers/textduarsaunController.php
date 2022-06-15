<?php

namespace App\Http\Controllers;

use App\textdurasaun;
use Illuminate\Http\Request;

class textduarsaunController extends Controller
{

    public function textedit($id){

        $data = textdurasaun::find($id);
        return view('durasaun.durasaun_index',compact('$data'));

}



    public function update($id){


        $data = textdurasaun::find($id);
        $data->update(request()->all());

        return back()->with('warning','Ita Boot Hakarak Hamodd Dados Nee');
    }

}
