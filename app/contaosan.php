<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contaosan extends Model
{
    protected $table = 'contaosan';
    protected $guarded = ['id',];

    //? ida nee Mak Relasi entre Osan ho user

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
        
    }

    //? ida nee Mak Rohan Husi Conta Osan
}
