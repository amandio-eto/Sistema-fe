<?php

namespace App\Http\Controllers;

use App\credito;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class softdeleController extends Controller
{
    public function index(){

        // $data = credito::onlyTrash->get();

        // ida nee Mak Softselete
        return view('recyclebin.recyclebin');



    }
}
