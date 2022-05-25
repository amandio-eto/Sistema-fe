<?php

namespace App\Http\Controllers;

use App\logs;
use Illuminate\Http\Request;

class logsController extends Controller
{
    public function logs(){

        $logs = logs::orderBy('id','DESC')->simplePaginate(15);
        return view('logs.logs',compact('logs'));
    }
}
