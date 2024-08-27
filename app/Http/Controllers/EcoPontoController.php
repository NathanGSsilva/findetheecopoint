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
            'longitude' => 'required'
        ]);

        Ecoponto::create([
            'nome' => $request->nome,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'categoria' => $request->longitude,
            'endereco' => $request->longitude
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

        // $usuario = Point::findOrFail($id);
        return view('admin.usuarios.editar', compact('usuario'));
    }

    public function update(Request $request, string $id)
    {
        
        // $request->validate([
        //     'nome' => 'required',
        //     'email' => 'required|string|email|unique:usuarios,email,' . $id,
        //     'password' => 'nullable|min:8|confirmed',
        // ]);

        // $usuario =  Point::findOrFail($id);

        // $usuario->update([
        //     'nome' => $request->nome,
        //     'email' => $request->email,
        //     'password' => $request->password ? Hash::make($request->password) : $usuario->password
        // ]);

        return redirect()->route('usuario.index')->with('sucesso', 'usuario atualizado com sucesso!!');
    }

    public function destroy(string $id)
    {
        // try{

        //     $usuario = Point::FindOrFail($id);
        //     $usuario->delete();
        //     return redirect()->route('usuario.index')->with('success', 'Usuario deletado com sucesso!!');
            
        // }catch(\Exception $e){
            
        //     return redirect()->route('usuario.index')->with('error', 'Usuario deletado com sucesso!!!');
        
        // };

    }

    public function buscar(string $id){

    $ecopontos = Ecoponto::where('tipolixo', 'cep')->get();  // Busca todos os usuários 
    
    return view('index', compact('ecopontos'));

    }

}