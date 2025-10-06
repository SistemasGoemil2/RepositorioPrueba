<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Embarques extends Model
{
    protected $table = 'embarques';

    protected $primaryKey = 'embarques_id';

    public $timestamps = false;

    protected $fillable = [
        'embarques_id',
        'embarques_fecha',
        'embarques_fecha_recibido',
        'embarques_aereolineas_id',
        'embarques_guia',
        'embarques_estado'
    ];
    public function aereolineas()
    {
        return $this->belongsTo(Aereolinea::class, 'embarques_aereolineas_id', 'aereolineas_id');
    }
    public function sacas()
    {
        return $this->hasMany(Sacas::class, 'sacas_embarques_id', 'embarques_id');
    }
}
