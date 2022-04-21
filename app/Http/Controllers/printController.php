<?php

namespace App\Http\Controllers;

use App\setoran;
use Illuminate\Http\Request;

class printController extends Controller
{
    public function index($id)
    {
        $data =  setoran::find($id);


        return view('print.index', compact('data'));
    }
}
