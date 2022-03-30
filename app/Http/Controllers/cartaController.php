<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\carta;

class cartaController extends Controller
{
    public function index()

    {
        $carta = carta::orderBy('id', 'DESC')->paginate(10);
        return view('layout.carta', compact('carta'));
    }

    public function request()
    {
        return view('layout.request');
    }
}
