<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index()
    {

        return view('layout.settinglogo');
    }
    // public function update(Request $request, $id)
    // {
    //     $logo = logo::find($id);
    //     $logo->update($request->all());
    // }
}
