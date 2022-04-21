<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saldo extends Model
{
    protected $table = 'saldo';
    protected $fillable = ['saldo', 'messagen', 'tipo_utilizasaun', 'data'];
}
