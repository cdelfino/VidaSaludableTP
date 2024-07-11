<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id('id_rol');
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table('roles')->insert([
            ['id_rol' => 1, 'nombre' => 'Administrador'],
            ['id_rol' => 2, 'nombre' => 'Medico'],
            ['id_rol' => 3, 'nombre' => 'Paciente']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
