<?php

namespace App\Http\Controllers;

use App\credito;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class softdeleController extends Controller
{
    public function index(){

        $delete = credito::OrderBy('id','DESC')->onlyTrashed()->paginate(5);
        return view('recyclebin.recyclebin',compact('delete'));
        return $delete;




    }
    //todo ida nee Mak restore Husi Sistema fe

    Public function restore($id){
        $post = credito::onlyTrashed()->findOrFail($id);
        $post->restore();
        return back()->with('success','Dados Restore Ona Ho Successo');

    }

    //todo ida nee Mak Roha HusiSistema Fe

    //? ida nee Mak Delete Husi Sistema Fe

    Public function forceDelete($id)
    {
        $del = credito::onlyTrashed()->findOrFail($id);
        $del->forceDelete();

        return redirect('delete/file')->with('Dados Hamos Permanente Ona');





    }

    //? ida nee Mak Roha Husi Delete
}
