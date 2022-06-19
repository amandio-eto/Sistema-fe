<?php

namespace App\Http\Controllers;

use App\credito;
use App\portail;
use Illuminate\Http\Request;

class portailController extends Controller
{
    public function index()
    {
        return view('portail.portail_index');

    }

    public function data()
    {


        return view('master.portail');

    }

}
