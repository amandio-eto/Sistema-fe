<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'foto', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function credito()
    {
        return $this->belongsTo(credito::class);
    }

    //? ida nee Mak Relasi Antara Table User ho Level
    public function level()
    {
        return $this->hasOne(level::class, 'user_id');
    }

    //! ida nee Mak Relasaun entre user ho Iha ContaOsan

    public function contaosan()
    {
        return $this->hasMany(contaosan::class, 'user_id');
    }

    //! ida nee Mak Rohan Husi Contaosan no User

    //todo ida nee mak relasaun Entre Durasaun Ho User
    public function durasaun(){

        return $this->hasMany(durasaun::class);

    }
}


