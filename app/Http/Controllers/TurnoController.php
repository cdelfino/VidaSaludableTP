<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Turno;
use App\Models\Medico;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turnos = Turno::with('paciente', 'medico')->get();
        return view('turnos.index', compact('turnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicos = Medico::all();
        $pacienteId = auth()->user()->id;  // id del paciente logueado
        return view('turnos.create', compact('medicos', 'pacienteId')); //pasar id de paciente logueado

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //faltan validaciones 

        Turno::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'dni' => $request->dni,
            'id_medico' => $request->medico,
            'id_paciente' => auth()->user()->id,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
        ]);

        return redirect()->route('turnos.index')->with('success', 'Turno agendado con éxito.');
    }
    //

    /**
     * Display the specified resource.
     */
    public function show(string $id)//mostrar turnos en vista medico
    {
        // busca el turno por id

        //aca flta verificr si el user logueado es un medico
        $medicoId = auth()->user()->id;
        $turnos = Turno::where('id_medico', $medicoId)->with('paciente')->get();
        $days = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
        $hours = ['08:00', '09:00', '10:00', '11:00', '12:00'];

        return view('turnos.show', compact('turnos', 'days', 'hours'));

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
