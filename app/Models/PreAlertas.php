<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreAlertas extends Model
{
    protected $table = 'pre_alertas';

    protected $primaryKey = 'pre_alertas_id';

    public $timestamps = false;

    protected $fillable = [
        'pre_alertas_id',
        'pre_alertas_tracking',
        'pre_alertas_fecha',
        'pre_alertas_hora',
        'pre_alertas_beneficiarios_id',
        'pre_alertas_remitentes_id',
        'pre_alertas_peso',
        'pre_alertas_valor',
        'pre_alertas_estado',
        'pre_alertas_factura',
    ];

    public function articulos()
    {
        return $this->hasMany(Articulo::class, 'articulos_pre_alertas_id', 'pre_alertas_id');
    }
    public function beneficiarios()
    {
        return $this->belongsTo(Beneficiario::class, 'pre_alertas_beneficiarios_id', 'beneficiarios_id');
    }
    public function remitentes()
    {
        return $this->belongsTo(Remitente::class, 'pre_alertas_remitentes_id', 'remitentes_id');
    }
}
