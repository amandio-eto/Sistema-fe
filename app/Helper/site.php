<?php
function osan($numero)
{


    return "$" . number_format($numero, 2);
}

function numero($nomor)
{

    return number_format($nomor) . "%";
}
function credito()
{
    return  \App\credito::all();
}

function saldo()
{
    return  App\saldoosan::all();
}

function contaosan($data)
{
    return ($data->durasaun->tempo / $data->total_credito);
}
