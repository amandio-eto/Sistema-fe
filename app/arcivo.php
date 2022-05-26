<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class arcivo extends Model
{
    protected $table = 'arcivo';
    protected $fillable = ['credito_id', 'montante_transfer', 'arcivo', 'comment'];

    //! ida nee Halo Relsaun Ba Iha Data Base iha iha Dados Credito
    public function credito()
    {
        return $this->belongsTo(credito::class,'credito_id');
    }
}
