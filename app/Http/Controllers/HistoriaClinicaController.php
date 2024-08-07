<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use Illuminate\Http\Request;
use App\Models\HistoriaClinica;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;


class HistoriaClinicaController extends Controller
{
    public function index(Request $request)
    {
        /*$historiasclinicas = HistoriaClinica::with('paciente', 'medico')->get();
        return view('historiasclinicas.index', compact('historiasclinicas'));*/

        $search = $request->input('search');

        $historiasclinicas = HistoriaClinica::with('paciente', 'medico')
            ->when($search, function ($query, $search) {
                return $query->whereHas('paciente', function ($query) use ($search) {
                    $query->where('nombre', $search);
                });
            })
            ->get();

        return view('historiasclinicas.index', compact('historiasclinicas', 'search'));
    }
   
    public function create()
    {
        $user = Auth::user();
        $medico = Medico::where('user_id', $user->id)->first();
        $pacientes = Paciente::all();

        return view('historiasclinicas.create', [
            'pacientes' => $pacientes,
            'medicoId' => $medico->id_medico
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_paciente' => 'required|exists:pacientes,id_paciente',
            'id_medico' => 'required|exists:medicos,id_medico',
            'tratamiento' => 'required|string',
            'diagnostico' => 'required|string',
            'antecedentes_familiares' => 'nullable|string',
            'antecedentes_medicos' => 'nullable|string',
            'examen_fisico' => 'nullable|string',
            'derivaciones' => 'nullable|string',
        ]);

        HistoriaClinica::create([
            'id_medico' => $validated['id_medico'],
            'id_paciente' => $validated['id_paciente'],
            'tratamiento' => $validated['tratamiento'],
            'diagnostico' => $validated['diagnostico'],
            'antecedentes_familiares' => $validated['antecedentes_familiares'],
            'antecedentes_medicos' => $validated['antecedentes_medicos'],
            'examen_fisico' => $validated['examen_fisico'],
            'derivaciones' => $validated['derivaciones'],
        ]);

        return redirect()->route('historiasclinicas.index')->with('success', 'Historia clínica creada exitosamente.');
    }

    public function show($id_historiaclinica)
    {
        $historiaclinica = HistoriaClinica::where('id_historiaclinica', $id_historiaclinica)
            ->with('paciente', 'medico')
            ->firstOrFail();

        return view('historiasclinicas.show', compact('historiaclinica'));
    }
    public function edit($id)
    {
        $user = Auth::user();

        $historiaClinica = HistoriaClinica::findOrFail($id);
        $pacientes = Paciente::all();
        $medico = Medico::where('user_id', $user->id)->first();
        return view('historiasclinicas.edit', ['historiaClinica' => $historiaClinica, 'pacientes' => $pacientes, 'medicoId' => $medico->id_medico]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'id_paciente' => 'required|exists:pacientes,id_paciente',
            'id_medico' => 'required|exists:medicos,id_medico',
            'tratamiento' => 'required|string',
            'diagnostico' => 'required|string',
            'antecedentes_familiares' => 'nullable|string',
            'antecedentes_medicos' => 'nullable|string',
            'examen_fisico' => 'nullable|string',
            'derivaciones' => 'nullable|string',
        ]);

        $historiaClinica = HistoriaClinica::findOrFail($id);

        $historiaClinica->id_medico = $request->id_medico;
        $historiaClinica->id_paciente = $request->id_paciente;
        $historiaClinica->tratamiento = $request->tratamiento;
        $historiaClinica->diagnostico = $request->diagnostico;
        $historiaClinica->antecedentes_familiares = $request->antecedentes_familiares;
        $historiaClinica->antecedentes_medicos = $request->antecedentes_medicos;
        $historiaClinica->examen_fisico = $request->examen_fisico;
        $historiaClinica->derivaciones = $request->derivaciones;
        $historiaClinica->save();



        return redirect()->route('historiasclinicas.index')->with('success', 'Historia clínica actualizada exitosamente.');
    }

    public function destroy(string $id)
    {
        //
    }
}
