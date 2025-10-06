<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';

    protected $primaryKey = 'paises_id';

    public $timestamps = false;

    protected $fillable = [
        'paises_id',
        'paises_nombre',
    ];

    public function localidades()
    {
        return $this->hasMany(Localidad::class, 'localidades_paises_id', 'paises_id');
    }
    public function regiones()
    {
        return $this->hasMany(Region::class, 'regiones_paises_id', 'paises_id');
    }
}
