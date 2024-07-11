<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medico;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

class MedicoController extends Controller
{
    protected $userController;

    public function __construct(UserController $userController)
    {
        $this->userController = $userController;
    }

    // Display a listing of the resource.
    public function index()
    {
        $user = Auth::user();
        $medicos = Medico::all();
        $medico = Medico::where('user_id', $user->id)->first();

        return view('medicos.index', compact('medicos', 'medico'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('medicos.register-doctor');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'string', 'max:20'],
            'fecha_nacimiento' => ['required', 'date'],
            'especialidad' => ['required', 'string', 'max:255'],
            'matricula' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:20'],
        ]);

        Medico::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'dni' => $request->dni,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'especialidad' => $request->especialidad,
            'matricula' => $request->matricula,
            'telefono' => $request->telefono,
            'user_id' => auth()->user()->id,
        ]);

        $this->userController->updateRole($request, auth()->user());

        return redirect('/medicos');
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
