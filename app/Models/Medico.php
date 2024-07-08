<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $table = 'medicos';
    protected $fillable = ['nombre', 'apellido', 'especialidad', 'telefono'];

    //relacion uno a muchos con turnos
    public function turnos()
    {
        return $this->hasMany(Turno::class, 'id_medico');
    }
    
    //relacion uno a muchos con historiaclinica
    public function historiaClinica()
    {
        return $this->hasMany(HistoriaClinica::class, 'id_medico');
    }
}