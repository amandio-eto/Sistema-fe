<?php
use Illuminate\Database\Eloquent\SoftDeletes;
function osan($numero)
{


    return "$" . number_format($numero, 2);
}



function numero($nomor)
{

    return number_format($nomor) . "%";
}


function saldo()
{
    return  App\saldoosan::all();
}

function contaosan($data)
{
    return ($data->durasaun->tempo / $data->total_credito);
}
function delete(){

    $data = App\credito::onlyTrashed()->get();
    return $data;

}
