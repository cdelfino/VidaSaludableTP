<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriaClinica extends Model
{
    use HasFactory;

    protected $table = 'historiasclinicas';
    protected $fillable = ['tratamiento', 'antecedentes_familiares', 'antecedentes_medicos', 'examen_fisico', 'diagnostico', 'derivaciones', 'id_medico', 'id_paciente'];
    protected $primaryKey = 'id_historiaclinica';


    // Relación uno a uno con Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente', 'id_paciente');
    }

    // Relación uno a muchos con Medico
    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico', 'id_medico');
    }
}
