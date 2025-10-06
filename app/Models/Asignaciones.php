<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignaciones extends Model
{
    protected $table = 'asignaciones';

    protected $primaryKey = 'asignaciones_id';

    public $timestamps = false;

    protected $fillable = [
        'asignaciones_id',
        'asignaciones_grupos_id',
        'asignaciones_productos_id',
    ];

    public function grupos()
    {
        return $this->belongsTo(Grupo::class, 'asignaciones_grupos_id', 'grupos_id');
    }
    public function productos()
    {
        return $this->belongsTo(Productos::class, 'asignaciones_productos_id', 'productos_id');
    }
}
