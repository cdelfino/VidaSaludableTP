<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;
    protected $table = 'turnos';
    protected $fillable = ['fecha', 'hora', 'id_paciente', 'id_medico'];


    //en el belongs to se hace referencia al nombre del id, ya que se utilizo id_{nombremodelo}

    //relacion uno a muchos, un turno pertenece a un paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente', 'id_paciente');
    }

    //relacion uno a muchos, un turno pertenece a un medico
    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico', 'id_medico');
    }
}
