<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    protected $table = 'beneficiarios';

    protected $primaryKey = 'beneficiarios_id';

    public $timestamps = false;

    protected $fillable = [
        'beneficiarios_id',
        'beneficiarios_fecha',
        'beneficiarios_nombres',
        'beneficiarios_correo',
        'beneficiarios_contrasena',
        'beneficiarios_doc_tipo',
        'beneficiarios_doc_numero',
        'beneficiarios_telefono',
        'beneficiarios_celular',
        'beneficiarios_direccion',
        'beneficiarios_postal',
        'beneficiarios_localidades_id',
        'beneficiarios_grupos_id',
        'beneficiarios_codigo',
        'beneficiarios_conocer',
        'beneficiarios_cupo',
        'beneficiarios_verificacion',
        'beneficiarios_carta_autorizacion',
        'beneficiarios_entrega',
        'beneficiarios_fecha_nacimiento',
        'beneficiarios_agencia',
    ];

    public function localidades()
    {
        return $this->belongsTo(Localidad::class, 'beneficiarios_localidades_id', 'localidades_id');
    }
    public function grupos()
    {
        return $this->belongsTo(Grupo::class, 'beneficiarios_grupos_id', 'grupos_id');
    }
    public function envios()
    {
        return $this->hasMany(Envios::class, 'envios_beneficiarios_id', 'beneficiarios_id');
    }
    public function extendidos()
    {
        return $this->hasMany(Extendidos::class, 'extendidos_beneficiarios_id', 'beneficiarios_id');
    }
    public function paquetes()
    {
        return $this->hasMany(Paquete::class, 'paquetes_beneficiarios_id', 'beneficiarios_id');
    }
    public function beneficiariosExtendidos()
    {
        return $this->hasMany(Paquete::class, 'paquetes_beneficiarios_extendidos_id', 'beneficiarios_id');
    }
    public function preAlertas()
    {
        return $this->hasMany(PreAlertas::class, 'prealertas_beneficiarios_id', 'beneficiarios_id');
    }
    public function remitentes()
    {
        return $this->hasMany(Remitente::class, 'remitentes_beneficiarios_id', 'beneficiarios_id');
    }
}
