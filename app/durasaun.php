<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class durasaun extends Model
{
    protected $table = 'durasaun';
    protected $fillable = ['tempo', 'user_id'];

    public function credito()
    {
        return $this->hasMany(credito::class);
    }

    public function double()
    {
        return $this->hasMany(double::class,'durasaun_id');
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}

