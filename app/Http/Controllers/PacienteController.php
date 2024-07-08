<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:30',
            'apellido' => 'required|string|max:30',
            'email' => 'nullable|email|max:255|unique:pacientes,email',
            'fecha_nacimiento' => 'nullable|date',
            'direccion' => 'nullable|string|max:45',
            'telefono' => 'nullable|string',
        ]);

        $paciente = new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->email = $request->email;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;
        $paciente->save();

        return redirect()->route('pacientes.index')->with('success', 'Paciente creado exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);
        //solo el paciente dueño del perfil puede ver los detalles de su perfil
        if (!$paciente || $paciente->id_paciente !== Auth::user()->id) {
            abort(403, 'No tienes permiso para ver este perfil');
        }

        return view('pacientes.show', compact('paciente'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);

        // verificar permisos
        if (!$paciente || $paciente->id_paciente !== Auth::user()->id) {
            abort(403, 'No tienes permiso para editar este perfil');
        }

        return view('pacientes.edit', compact('paciente'));
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
