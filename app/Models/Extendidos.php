<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extendidos extends Model
{
    protected $table = 'extendidos';

    protected $primaryKey = 'extendidos_id';

    public $timestamps = false;

    protected $fillable = [
        'extendidos_id',
        'extendidos_fecha',
        'extendidos_nombres',
        'extendidos_correo',
        'extendidos_doc_tipo',
        'extendidos_doc_numero',
        'extendidos_telefono',
        'extendidos_celular',
        'extendidos_direccion',
        'extendidos_postal',
        'extendidos_localidades_id',
        'extendidos_grupos_id',
        'extendidos_beneficiarios_id',
        'extendidos_cupo'
    ];

    public function localidades()
    {
        return $this->belongsTo(Localidad::class, 'extendidos_localidades_id', 'localidades_id');
    }
    public function grupos()
    {
        return $this->belongsTo(Grupo::class, 'extendidos_grupos_id', 'grupos_id');
    }
    public function beneficiarios()
    {
        return $this->belongsTo(Beneficiario::class, 'extendidos_beneficiarios_id', 'beneficiarios_id');
    }
}
