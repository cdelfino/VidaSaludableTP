<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        if ($user->id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para editar este perfil');
        }
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);
        if ($user->id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para editar este perfil');
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        if (Auth::user()->id_rol == 2) {
            return redirect()->route('medicos.index')
                ->with('success', 'Usuario actualizado con éxito.');
        } elseif (Auth::user()->id_rol == 3) {
            return redirect()->route('pacientes.index')
                ->with('success', 'Usuario actualizado con éxito.');
        } else {
            return redirect()->route('home')
                ->with('success', 'Usuario actualizado con éxito.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function updateRole(Request $request, User $user)
    {
        $user->id_rol = 2;
        $user->update();
        return redirect()->route('home');
    }

}
