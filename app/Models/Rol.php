<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = ['id_rol', 'nombre_rol'];
    protected $primaryKey = 'id_rol'; 

    //Relacion uno a muchos con usuarios
    public function users()
    {
        return $this->hasMany(User::class, 'id_rol', 'id_rol');
    }
}
