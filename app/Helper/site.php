<?php
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
