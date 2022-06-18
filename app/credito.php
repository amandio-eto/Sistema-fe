<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class credito extends Model
{

    public $table = "credito";
    protected $fillable = ['durasaun_id', 'osanfunan_id', 'naran',  'data_moris', 'hela_fatin', 'suco', 'padministrativo', 'municipio', 'salario', 'total_credito', 'phone', 'foto', 'clientid'];

    public function getfoto()
    {

        // ida nee mak icon husi Defalut png
        if (!$this->foto) {
            return asset('images/user.png');
        }
        return asset('images/' . $this->foto);
    }
    public function setoran()
    {
        return $this->hasMany(setoran::class);
    }

    //! ida nee Usa Ba Relasional Database Ho User

    //? ida nee  Halo Relasaun Database Ba Iha arcivu
    public function arcivo()
    {
        return $this->hasMany(arcivo::class,'credito_id');
    }
    //! ida nee Halo Link Ho Durasaun
    public function durasaun()
    {
        return $this->belongsTo(durasaun::class,);
    }
    //! ida nee Mak Nia Roha Husi Durasaun

    //! ida nee Halo Link Ho Osan Funan
    public function osanfunan()
    {
        return $this->belongsTo(osanfunan::class);
    }
    //! ida nee Mak Nia Roha Husi Osan Funan

    //? ida nee mKa Function Husi Funfu Esperanca

    public function osancredito()
    {


        $total = 0;

        foreach ($this->setoran as $creditosetoran) {
            $total = $total + $creditosetoran->update_selu;
        }
        return $total;
    }

    public function  report()
    {

        $report = 0;
        foreach ($this->setoran as $conta) {

            $report = $report + $conta->count();
        }

        return $report;
    }


    public function double()
    {

        return $this->hasMany(double::class);
    }

}
