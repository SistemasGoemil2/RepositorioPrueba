<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recaudacion extends Model
{
    protected $table = 'recaudaciones';

    protected $primaryKey = 'recaudaciones_id';

    public $timestamps = false;

    protected $fillable = [
        'recaudaciones_id',
        'recaudaciones_fecha',
        'recaudaciones_institucion',
        'recaudaciones_forma',
        'recaudaciones_documento',
        'recaudaciones_valor',
        'recaudaciones_fecha_realizado',
        'recaudaciones_observaciones',
        'recaudaciones_estado',
        'recaudaciones_usuarios_id',
        'recaudaciones_grupos_id',
    ];

    public function consolidaciones()
    {
        return $this->hasMany(Consolidacion::class, 'consolidaciones_recaudaciones_id', 'recaudaciones_id');
    }
    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'recaudaciones_usuarios_id', 'usuarios_id');
    }
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'recaudaciones_grupos_id', 'grupos_id');
    }
}
