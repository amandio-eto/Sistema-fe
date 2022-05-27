<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Double;
use \App\credito;
use App\double as AppDouble;

class doubleController extends Controller
{
    public function create(Request $request, $id)
    {
        //todo Ida nee Mak Usa Ba Iha Variable Dados Double

        $credito_id =  $request->credito_id;
        $durasaun_id = $request->durasaun_id;
        $osanfunan_id = $request->osanfunan_id;
        $t_imprestimo = $request->t_imprestimo;
        $aprovado = 1;


        //todo Ida nee Ma Rohan Husi Double Iha Sistema Fundu Esperaca
        $cria  = [

            'credito_id' => $credito_id,
            'durasaun_id' => $durasaun_id,
            'osanfunan_id' => $osanfunan_id,
            't_imprestimo' => $t_imprestimo,
            'aprovado' => $aprovado
        ];


        \App\double::create($cria);
        return back();








    }
}
