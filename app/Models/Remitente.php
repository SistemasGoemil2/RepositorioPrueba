<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Remitente extends Model
{
    protected $table = 'remitentes';

    protected $primaryKey = 'remitentes_id';

    public $timestamps = false;

    protected $fillable = [
        'remitentes_id',
        'remitentes_fecha',
        'remitentes_nombres',
        'remitentes_correo',
        'remitentes_doc_tipo',
        'remitentes_doc_numero',
        'remitentes_telefono',
        'remitentes_direccion',
        'remitentes_localidades_id',
        'remitentes_grupos_id',
        'remitentes_beneficiarios_id',
        'remitentes_registrado',
        'remitentes_tienda',
    ];

    public function envios()
    {
        return $this->hasMany(Envios::class, 'envios_remitentes_id', 'remitentes_id');
    }
    public function paquetes()
    {
        return $this->hasMany(Paquete::class, 'paquetes_remitentes_id', 'remitentes_id');
    }
    public function preAlertas()
    {
        return $this->hasMany(PreAlertas::class, 'pre_alertas_remitentes_id', 'remitentes_id');
    }
    public function localidades()
    {
        return $this->belongsTo(Localidad::class, 'remitentes_localidades_id', 'localidades_id');
    }
    public function grupos()
    {
        return $this->belongsTo(Grupo::class, 'remitentes_grupos_id', 'grupos_id');
    }
    public function beneficiarios()
    {
        return $this->belongsTo(Beneficiario::class, 'remitentes_beneficiarios_id', 'beneficiarios_id');
    }
}
