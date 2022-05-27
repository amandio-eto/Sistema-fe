<?php

namespace App\Http\Controllers;

use App\appname;
use Illuminate\Http\Request;

class appnameController extends Controller
{
    public function appname()
    {
        $master = 'amandio';
        return view('master.lanscape',compact('master'));

    }
}
