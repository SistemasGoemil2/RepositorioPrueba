<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DespachoBodega extends Model
{
    protected $table = 'despachos_bodegas';

    protected $primaryKey = 'despachos_bodegas_id';

    public $timestamps = false;

    protected $fillable = [
        'despachos_bodegas_id',
        'despachos_bodegas_usuarios_id',
        'despachos_bodegas_fecha',
        'despachos_bodegas_estado',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'despachos_bodegas_usuarios_id', 'usuarios_id');
    }
    public function paquetes()
    {
        return $this->hasMany(Paquete::class, 'paquetes_despachos_bodegas_id', 'despachos_bodegas_id');
    }
}
