<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Envios extends Model
{
    protected $table = 'envios';

    protected $primaryKey = 'envios_id';

    public $timestamps = false;

    protected $fillable = [
        'envios_id',
        'envios_numero',
        'envios_fecha',
        'envios_hora',
        'envios_beneficiarios_id',
        'envios_remitentes_id',
        'envios_peso',
        'envios_valor',
        'envios_observaciones',
        'envios_estado',
        'envios_paquetes_id',
        'envios_usuarios_id',
        'envios_estado_historico',
        'envios_consolidado',
    ];

    public function contenidos()
    {
        return $this->hasMany(Contenido::class, 'contenidos_envios_id', 'envios_id');
    }
    public function beneficiarios()
    {
        return $this->belongsTo(Beneficiario::class, 'envios_beneficiarios_id', 'beneficiarios_id');
    }
    public function remitentes()
    {
        return $this->belongsTo(Remitente::class, 'envios_remitentes_id', 'remitentes_id');
    }
    public function paquetes()
    {
        return $this->belongsTo(Paquete::class, 'envios_paquetes_id', 'paquetes_id');
    }
    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'envios_usuarios_id', 'usuarios_id');
    }
    public function facturasCompras()
    {
        return $this->hasMany(facturasCompras::class, 'facturas_compras_envios_id', 'envios_id');
    }
}
