<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacturasEmitidas extends Model
{
    protected $table = 'facturas_emitidas';

    protected $primaryKey = 'facturas_emitidas_id';

    public $timestamps = false;

    protected $fillable = [
        'facturas_emitidas_id',
        'facturas_emitidas_fecha',
        'facturas_emitidas_categoria',
        'facturas_emitidas_paquetes_id',
        'facturas_emitidas_productos_id',
        'facturas_emitidas_peso_ajustado',
        'facturas_emitidas_calculo_tarifa',
        'facturas_emitidas_calculo_comision',
        'facturas_emitidas_calculo_add',
        'facturas_emitidas_seguro',
        'facturas_emitidas_migrante',
        'facturas_emitidas_total',
        'facturas_emitidas_impuestos',
        'facturas_emitidas_estado',
        'facturas_emitidas_usuarios_id'
    ];
    public function paquete()
    {
        return $this->belongsTo(Paquete::class, 'facturas_emitidas_paquetes_id', 'paquetes_id');
    }
    public function producto()
    {
        return $this->belongsTo(Productos::class, 'facturas_emitidas_productos_id', 'productos_id');
    }
    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'facturas_emitidas_usuarios_id', 'usuarios_id');
    }
}
