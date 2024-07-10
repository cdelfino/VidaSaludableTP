<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medico;

class MedicoController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('medicos.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'especialidad' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
        ]);

        Medico::create($request->all());

        return redirect()->route('medicos.index')
            ->with('success', 'Medico creado exitosamente.');
    }

    // Display the specified resource.
    public function show($id_medico)
    {
        $medico = Medico::findOrFail($id_medico);
        return view('medicos.show', compact('medico'));
    }

    // Show the form for editing the specified resource.
    public function edit($id_medico)
    {
        $medico = Medico::findOrFail($id_medico);
        return view('medicos.edit', compact('medico'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id_medico)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'especialidad' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
        ]);

        $medico = Medico::findOrFail($id_medico);
        $medico->update($request->all());

        return redirect()->route('medicos.index')
            ->with('success', 'Medico actualizado exitosamente.');
    }

    // Remove the specified resource from storage.
    public function destroy(string $id_medico)
    {
        //
    }
}
