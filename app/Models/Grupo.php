<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $primaryKey = 'grupos_id';

    public $timestamps = false;

    protected $fillable = [
        'grupos_id',
        'grupos_nombre',
        'grupos_estado',
        'grupos_credito',
    ];

    public function asignaciones()
    {
        return $this->hasMany(Asignaciones::class, 'asignaciones_grupos_id', 'grupos_id');
    }
    public function beneficiarios()
    {
        return $this->hasMany(Beneficiario::class, 'beneficiarios_grupos_id', 'grupos_id');
    }
    public function extendidos()
    {
        return $this->hasMany(Extendidos::class, 'extendidos_grupos_id', 'grupos_id');
    }
    public function recaudaciones()
    {
        return $this->hasMany(Recaudacion::class, 'recaudaciones_grupos_id', 'grupos_id');
    }
    public function remitentes()
    {
        return $this->hasMany(Remitente::class, 'remites_grupos_id', 'grupos_id');
    }
    public function usuarios()
    {
        return $this->hasMany(Usuarios::class, 'usuarios_grupos_id', 'grupos_id');
    }
}
