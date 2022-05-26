<?php

namespace App\Http\Controllers;

use App\logs;
use Illuminate\Http\Request;

class logsController extends Controller
{
    public function logs(Request $request){


        if($request->has('buka')){
            $logs = logs::where('username','LIKE','%'.$request->buka.'%')
                    ->OrWhere('email','LIKE','%'.request()->buka.'%')
                    ->simplePaginate(15);

        }else{

            $logs = logs::orderBy('id','DESC')->simplePaginate(15);
        }

        return view('logs.logs',compact('logs'));
    }
}
