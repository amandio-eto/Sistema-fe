<?php

namespace App\Http\Controllers;

use App\credito;
use Illuminate\Http\Request;
use \App\LogActivity;

class homeController extends Controller
{
    public function home()
    {


        $credito = credito::get();
        return view('home.home',compact('credito'));
    }


    public function myTestAddToLog()
    {
        \App\LogActivity::addToLog('My Testing Add To Log.');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logActivity()
    {
        $logs = logActivity::logActivityLists()->get();
        return view('logActivity', compact('logs'));
    }
}
