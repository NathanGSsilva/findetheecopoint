<?php

namespace App\Http\Controllers;

use App\Models\Parceiro;
use Illuminate\Http\Request;


class ParceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parceiro = Parceiro::paginate(10);

        return view('admin.parceiros.index', compact('parceiro') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.parceiros.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'rua' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'cep' => 'required',
            'estado' => 'required'
        ]);

        Parceiro::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'cep' => $request->cep,
            'estado' => $request->estado
            
        ]);

        return redirect()->route('home')->with('sucesso','Usuario cadastrado com sucesso!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $parceiro = Parceiro::findOrFail($id);
       return view('admin.parceiros.visualizar', compact('parceiro'));
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
