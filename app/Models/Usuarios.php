<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';

    protected $primaryKey = 'usuarios_id';

    public $timestamps = false;

    protected $fillable = [
        'usuarios_id',
        'usuarios_nombres',
        'usuarios_usuario',
        'usuarios_contrasena',
        'usuarios_correo',
        'usuarios_direcciones_id',
        'usuarios_area',
        'usuarios_grupos_id',
        'usuarios_subarea',
        'usuarios_estado',
    ];

    public function despachoBodegas()
    {
        return $this->hasMany(DespachoBodega::class, 'despachos_bodegas_usuarios_id', 'usuarios_id');
    }
    public function despachoOficinas()
    {
        return $this->hasMany(DespachoOficina::class, 'despachos_oficinas_usuarios_id', 'usuarios_id');
    }
    public function envios()
    {
        return $this->hasMany(Envios::class, 'envios_usuarios_id', 'usuarios_id');
    }
    public function facturasEmitidas()
    {
        return $this->hasMany(FacturasEmitidas::class, 'facturas_emitidas_usuarios_id', 'usuarios_id');
    }
    public function paquetes()
    {
        return $this->hasMany(Paquete::class, 'paquetes_usuarios_id', 'usuarios_id');
    }
    public function paquetesEntregados()
    {
        return $this->hasMany(Paquete::class, 'paquetes_entregados_usuarios_id', 'usuarios_id');
    }
    public function recaudaciones()
    {
        return $this->hasMany(Recaudacion::class, 'recaudaciones_usuarios_id', 'usuarios_id');
    }
    public function direcciones()
    {
        return $this->belongsTo(Direccion::class, 'usuarios_direcciones_id', 'direcciones_id');
    }
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'usuarios_grupos_id', 'grupos_id');
    }
}
