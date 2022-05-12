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
        $cash = $update_selu->sum('update_selu');
        $saldototal = $saldo->sum('saldo');
        $saldo_actual = $saldo->sum('saldo') + $update_selu->sum('update_selu');
        $osanactual = $saldo_actual - $credito->sum('total_credito');
        $creditoosan = $credito->sum('total_credito');


        return view('layout.dasboard', compact('saldo', 'credito', 'update_selu', 'cash', 'saldototal', 'saldo_actual', 'osanactual', 'creditoosan'));
    }
}
