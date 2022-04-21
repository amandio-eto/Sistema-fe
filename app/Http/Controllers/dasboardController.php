<?php

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;
use \App\credito;
use App\saldo;
use App\setoran;

class dasboardController extends Controller
{
    public function index()
    {
        $update_selu = setoran::all();
        $saldo = saldo::all();
        $credito = credito::all();



        return view('layout.dasboard', compact('saldo', 'credito', 'update_selu'));
    }
}
