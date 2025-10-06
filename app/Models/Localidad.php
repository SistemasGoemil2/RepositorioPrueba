<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidades';

    protected $primaryKey = 'localidades_id';

    public $timestamps = false;

    protected $fillable = [
        'localidades_id',
        'localidades_ciudad',
        'localidades_provincia',
        'localidades_paises_id'
    ];

    public function aereolineas()
    {
        return $this->hasMany(Aereolinea::class, 'aereolineas_localidades_id', 'localidades_id');
    }
    public function beneficiarios()
    {
        return $this->hasMany(Beneficiario::class, 'beneficiarios_localidades_id', 'localidades_id');
    }
    public function direcciones()
    {
        return $this->hasMany(Direccion::class, 'direcciones_localidades_id', 'localidades_id');
    }
    public function extendidos()
    {
        return $this->hasMany(Extendidos::class, 'extendidos_localidades_id', 'localidades_id');
    }
    public function pais()
    {
        return $this->belongsTo(Pais::class, 'localidades_paises_id', 'paises_id');
    }
    public function remitentes()
    {
        return $this->hasMany(Remitente::class, 'remites_localidades_id', 'localidades_id');
    }
}
