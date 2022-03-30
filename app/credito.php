<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class credito extends Model
{
    protected $table = "dadoscredito";
    protected $fillable = ['naran', 'clientid','data_moris', 'hela_fatin','suco','padministrativo','municipio','salario','total_credito','phone','foto','source','durasaun','osan_funan'];

    public function getfoto()
    {

        // ida nee mak icon husi Defalut png
        if (!$this->foto){
            return asset('images/user.png');
        }
        return asset('images/'.$this->foto);
    }

}
