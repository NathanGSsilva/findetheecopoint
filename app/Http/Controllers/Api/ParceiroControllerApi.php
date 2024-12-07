<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Parceiro;
use Illuminate\Http\Request;
use Exception;


class ParceiroControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $parceiros = Parceiro::all();

        try {
            return response()->json([$parceiros, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
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

        $parceiro = Parceiro::create([
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

        try {
            return response()->json([$parceiro, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

       $parceiro = Parceiro::findOrFail($id);

        try {
            return response()->json([$parceiro, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $parceiros = Parceiro::findOrFail($id);

        try {
            return response()->json([$parceiros, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
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
