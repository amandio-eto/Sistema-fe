<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class durasaun extends Model
{
    protected $table = 'durasaun';
    protected $fillable = ['duarsaun', 'messangen'];

    public function credito()
    {
        return $this->hasMany(credito::class);
    }
}
