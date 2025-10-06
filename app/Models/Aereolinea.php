<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aereolinea extends Model
{
    protected $table = 'aereolineas';

    protected $primaryKey = 'aereolineas_id';

    public $timestamps = false;

    protected $fillable = [
        'aereolineas_id',
        'aereolineas_nombre',
        'aereolineas_localidades_id',
        'aereolinea_modificado',
        'aereolineas_creado'
    ];

    public function localidades()
    {
        return $this->belongsTo(Localidad::class, 'aereolineas_localidades_id', 'localidades_id');
    }
    public function embarques()
    {
        return $this->hasMany(Embarques::class, 'embarques_aereolineas_id', 'aereolineas_id');
    }
}
