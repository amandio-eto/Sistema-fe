<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class double extends Model
{
    protected $table = 'tb_double';
    protected $fillable =
    [
        'credito_id',
        'durasaun_id',
        'osanfunan_id',
        't_imprestimo',
        'date',
        'aprovado'

    ];
    public function credito(){
        return $this->belongsTo(credito::class);
    }

    // public function durasaun(){
    //     return $this->HasOne(durasaun::class);

    // }

    // public function osanfunan(){
    //     return $this->hasOne(osanfunan::class);
    // }

}
