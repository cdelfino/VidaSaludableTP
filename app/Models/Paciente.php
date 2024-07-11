<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';
    protected $primaryKey = 'id_paciente';
    protected $fillable = ['nombre', 'apellido', 'dni', 'fecha_nacimiento', 'direccion', 'telefono', 'obra_social', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }   

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
