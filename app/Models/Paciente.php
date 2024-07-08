<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';
    protected $primaryKey = 'id_paciente';
    protected $fillable = ['nombre', 'apellido', 'fecha_nacimiento', 'direccion', 'telefono', 'email'];
    //aca dberian ir los campos not null con protected $fillable

    //relacion uno a muchos, un paciente puede tener muchos turnos
    public function turnos()
    {
        return $this->hasMany(Turno::class, 'id_paciente');
    }
    // relación de uno a uno con la tabla historiaclinica
    public function historiaClinica()
    {
        return $this->hasOne(HistoriaClinica::class, 'id_paciente');
    }
}
