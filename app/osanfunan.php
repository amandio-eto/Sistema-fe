<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class osanfunan extends Model
{
    protected $table = "osanfunan";
    protected $fillable = ['osanfunan', 'messangen'];


    public function credito()
    {
        return $this->hasMany(credito::class);
    }
}
