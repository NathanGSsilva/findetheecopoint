<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Ecoponto;
use Exception;
use Illuminate\Http\Request;

class EcoPontoController extends Controller
{
  
    public function index()
    {
        $ecoponto = Ecoponto::paginate(10);

        return view('admin.ecopontos.index', compact('ecoponto')); 
    }

    public function create()
    {
        return view('admin.ecopontos.cadastrar');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'categoria' => 'categoria',
            'endereco' => 'endereco'
        ]);

        Ecoponto::create([
            'nome' => $request->nome,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'categoria' => $request->categoria,
            'endereco' => $request->endereco
        ]);

        return redirect()->route('ecopontos.index')->with('sucesso','EcoPonto cadastrado com sucesso!!');

        // dd($request);
    }

    public function show(string $id)

    {
        $ecoponto = Ecoponto::findOrFail($id);
       return view('admin.ecopontos.visualizar', compact('ecoponto'));
    }

    public function edit(string $id)
    {

        $ecoponto = Ecoponto::findOrFail($id);
        return view('admin.ecopontos.editar', compact('ecoponto'));
    }

    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'nome' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'categoria' => 'required',
            'endereco' => 'required'
        ]);

        $categoria =  Ecoponto::findOrFail($id);

        $categoria->update([
            'nome' => $request->nome,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'categoria' => $request->categoria,
            'endereco' => $request->endereco
        ]);

        return redirect()->route('ecoponto.index')->with('sucesso', 'ecoponto atualizado com sucesso!!');
    }

    public function destroy(string $id)
    {
        try{

            $ecoponto = Ecoponto::FindOrFail($id);
            $ecoponto->delete();
            return redirect()->route('ecopontos.index')->with('success', 'Usuario deletado com sucesso!!');
            
        }catch(\Exception $e){
            
            return redirect()->route('ecopontos.index')->with('error', 'Usuario deletado com sucesso!!!');
        
        };

    }

    public function buscar(string $id){

    $ecopontos = Ecoponto::where('tipolixo', 'cep')->get();  // Busca todos os usuários 
    
    return view('index', compact('ecopontos'));

    }

}