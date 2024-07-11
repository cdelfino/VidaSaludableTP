<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Turno;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;
use App\Models\HistoriaClinica;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $paciente = Paciente::where('user_id', $user->id)->firstOrFail();

        $turnos = Turno::where('id_paciente', $paciente->id_paciente)->with('medico')->get();
        foreach ($turnos as $turno) {
            $historiaClinica = HistoriaClinica::where('id_paciente', $turno->paciente->id_paciente)->first();
            $turno->historia_clinica_id = $historiaClinica ? $historiaClinica->id_historiaclinica : null;
        }
        return view('turnos.index', compact('turnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $paciente = Paciente::where('user_id', $user->id)->firstOrFail();
        $medicos = Medico::all();

        return view('turnos.create', [
            'medicos' => $medicos,
            'pacienteId' => $paciente->id_paciente
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Turno::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'dni' => $request->dni,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'id_medico' => $request->id_medico,
            'id_paciente' => $request->id_paciente,
        ]);

        return redirect()->route('turnos.index')->with('success', 'Turno agendado con éxito.');
    }
    //

    /**
     * Display the specified resource.
     */
    public function show(string $id)//ARREGLAR PARA MEDICO
    {
        $user = Auth::user();
        $medico = Medico::where('user_id', $user->id)->firstOrFail();
        $turnos = Turno::where('id_medico', $medico->id_medico)->get();

        return view('turnos.show', [
            'turnos' => $turnos,
            'medicoId' => $medico->id_medico
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
