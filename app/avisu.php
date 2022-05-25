<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avisu extends Model
{
    protected $table = 'avisu';
    protected $fillable = ['avisu', 'titlu'];

    public function scopeLatestFirst()
    {
        return $this->latest()->first();
    }
}
