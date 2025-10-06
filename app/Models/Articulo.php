<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';

    protected $primaryKey = 'articulos_id';

    protected $fillable = [
        'articulos_id',
        'articulos_cantidad',
        'articulos_descripcion',
        'articulos_pre_alertas_id',
    ];

    public function preAlertas()
    {
        return $this->belongsTo(PreAlertas::class, 'articulos_pre_alertas_id', 'pre_alertas_id');
    }
}
