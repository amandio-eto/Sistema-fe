<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portail extends Model
{
    protected $table = 'portail';
    protected $guarded = ['id','created_at','updated_at','deletet_at'];
}
