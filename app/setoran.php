<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setoran extends Model
{
    /**
     * ! ida nee Usa ba Iha Dados Setoran  no Link ho Table user
     */
    public $table = 'setoran';
    protected $fillable = ['update_selu', 'status', 'selu', 'credito_id', 'data'];

    // public function credito()
    // {
    //     return $this->belongsToMany(setoran::class);
    // }
    public function credito()
    {

        return $this->belongsTo(credito::class);
    }
}
