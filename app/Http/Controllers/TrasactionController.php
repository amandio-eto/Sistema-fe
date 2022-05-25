<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrasactionController extends Controller
{
    public function index()
    {
        return view('Transaction.index');
    }
}
