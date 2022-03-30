<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;
use \App\credito;


class dasboardController extends Controller
{
    public function index()
    {

        $saldo = App\saldoosan::all();
        $credito = credito::all();
        $conta = 10000 - $credito->sum('total_credito');
      

      
        return view('layout.dasboard',compact('saldo','credito','conta'));

    }
}
