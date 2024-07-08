<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = ['nombre_rol'];
    
    //Relacion uno a muchos con usuarios
    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_rol', 'id');
    }
}
