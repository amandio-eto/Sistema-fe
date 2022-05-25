<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    protected $table = 'level';

    protected $fillable = ['code', 'level', 'user_id'];

    public function User()
    {
        //? ida nee Mak Halo Relasi Database Husi Level ==> ba Iha User
        return $this->belongsTo(User::class);
    }
}
