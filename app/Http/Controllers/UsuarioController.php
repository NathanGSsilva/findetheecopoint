<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Usuario::paginate(10);
        
        return view("admin.usuarios.index", compact('usuario'));
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
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required'
        ]);

        Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha
            
        ]);

        return redirect()->route('home')->with('sucesso','Usuario cadastrado com sucesso!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $usuario = Usuario::findOrFail($id);
       return view('admin.usuarios.visualizar', compact('usuario'));
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
