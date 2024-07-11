<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Http\Controllers\UserController;
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
        return view('pacientes.register-paciente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required|string|max:30', 'apellido' => 'required|string|max:30', 'dni' => ['required', 'string', 'max:20'], 'fecha_nacimiento' => 'nullable|date', 'direccion' => 'nullable|string|max:45', 'telefono' => 'nullable|string', 'obra_social' => 'required|string|max:255',]);

        Paciente::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'dni' => $request->dni,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'obra_social' => $request->obra_social,
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/pacientes');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = Auth::user();
        $paciente = Paciente::where('user_id', $user->id)->firstOrFail();

        // Solo el paciente dueño del perfil puede ver los detalles de su perfil
        if ($paciente->id_paciente !== (int) $id) {
            abort(403, 'No tienes permiso para ver este perfil');
        }

        return view('pacientes.show', compact('paciente'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = Auth::user();
        $paciente = Paciente::where('user_id', $user->id)->firstOrFail();
        // verificar permisos
        if ($paciente->id_paciente !== (int) $id) {
            abort(403, 'No tienes permiso para ver este perfil');
        }


        return view('pacientes.edit', compact('paciente'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:30',
            'apellido' => 'required|string|max:30',
            'dni' => ['required', 'string', 'max:20'],
            'fecha_nacimiento' => 'nullable|date',
            'direccion' => 'nullable|string|max:45',
            'telefono' => 'nullable|string',
            'obra_social' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $paciente = Paciente::where('user_id', $user->id)->firstOrFail();
        if ($paciente->id_paciente !== (int) $id) {
            abort(403, 'No tienes permiso para ver este perfil');
        }

        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;
        $paciente->dni = $request->dni;
        $paciente->obra_social = $request->obra_social;
        $paciente->save();

        return redirect()->route('pacientes.show', $paciente->id_paciente)->with('success', 'Datos actualizados exitosamente.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
