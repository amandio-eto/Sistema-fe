<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appname extends Model
{
    protected  $table ='tb_app';
    protected $fillable = ['app_name','image'];
}
