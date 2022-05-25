<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\level;

class levelCotroller extends Controller
{
    public function index()
    {

        $level = level::all();
        return view('level.index_level', compact('level'));
    }

    // ida nee Mak Controller Levle Oinsa Cria Dados

    public function create(Request $request)
    {

        $request->validate([
            'code' => 'required|string|max:10',
            'level' => 'required|unique:level,level,except,id',
            'user_id' => 'required'


        ]);

        $level = level::create($request->all());

        return back()->with('success', 'Ita Boot Nia Level Credito Cria Ona Ho Successo');
    }
}
