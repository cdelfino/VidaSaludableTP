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
        Schema::create('historiasclinicas', function (Blueprint $table) {
            $table->id('id_historiaclinica');
            $table->text('tratamiento');
            $table->text('antecedentes_familiares');
            $table->text('antecedentes_medicos');
            $table->text('examen_fisico');
            $table->text('diagnostico');
            $table->text('derivaciones');
            $table->foreignId('id_medico')->constrained('medicos', 'id_medico');
            $table->foreignId('id_paciente')->constrained('pacientes', 'id_paciente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiasclinicas');
    }
};
