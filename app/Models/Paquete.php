<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $table = 'paquetes';
    protected $primaryKey = 'paquetes_id';
    public $timestamps = false;

    protected $fillable = [
        'paquetes_id',
        'paquetes_fecha',
        'paquetes_observaciones',
        'paquetes_consolidado',
        'paquetes_beneficiarios_id',
        'paquetes_remitentes_id',
        'paquetes_beneficiarios_extendidos_id',
        'paquetes_direcciones_id',
        'paquetes_despachos_bodegas_id',
        'paquetes_sacas_id',
        'paquetes_despachos_oficinas_id',
        'paquetes_estado',
        'paquetes_usuarios_id',
        'paquetes_entregados_usuarios_id',
        'paquetes_entregados_fecha',
        'paquetes_comprobante_ruta',
        'paquetes_comprobante_estado',
        'paquetes_sacas_oficinas_id'
    ];

    public function bitacoras()
    {
        return $this->hasMany(Bitacoras::class, 'bitacoras_paquetes_id', 'paquetes_id');
    }
    public function consolidaciones()
    {
        return $this->hasMany(Consolidacion::class, 'consolidaciones_paquetes_id', 'paquetes_id');
    }
    public function envios()
    {
        return $this->hasMany(Envios::class, 'envios_paquetes_id', 'paquetes_id');
    }
    public function facturasEmitidas()
    {
        return $this->hasMany(FacturasEmitidas::class, 'facturas_emitidas_paquetes_id', 'paquetes_id');
    }
    public function beneficiario()
    {
        return $this->belongsTo(Beneficiario::class, 'paquetes_beneficiarios_id', 'beneficiarios_id');
    }
    public function remitente()
    {
        return $this->belongsTo(Remitente::class, 'paquetes_remitentes_id', 'remitentes_id');
    }
    public function beneficiarioExtendido()
    {
        return $this->belongsTo(Beneficiario::class, 'paquetes_beneficiarios_extendidos_id', 'beneficiarios_extendidos_id');
    }
    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'paquetes_direcciones_id', 'direcciones_id');
    }
    public function despachoBodega()
    {
        return $this->belongsTo(DespachoBodega::class, 'paquetes_despachos_bodegas_id', 'despachos_bodegas_id');
    }
    public function despachoOficina()
    {
        return $this->belongsTo(DespachoOficina::class, 'paquetes_despachos_oficinas_id', 'despachos_oficinas_id');
    }
    public function sacas()
    {
        return $this->belongsTo(Sacas::class, 'paquetes_sacas_id', 'sacas_id');
    }
    public function sacasOficina()
    {
        return $this->belongsTo(SacasOficinas::class, 'paquetes_sacas_oficinas_id', 'sacas_oficinas_id');
    }
    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'paquetes_usuarios_id', 'usuarios_id');
    }
    public function entregadoUsuario()
    {
        return $this->belongsTo(Usuarios::class, 'paquetes_entregados_usuarios_id', 'usuarios_id');
    }
}
