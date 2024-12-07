<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Ecoponto;
use Exception;
use Illuminate\Http\Request;
use Storage;

class EcoPontoController extends Controller
{
  
    public function index()
    {
        $ecoponto = Ecoponto::paginate(15);

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
            'endereco' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'funcionamento' => 'required',
            'descricao' => 'required',
            'lixos' => 'required'
        ]);

        $ecoponto = Ecoponto::create($request->all());

        if ($request->hasFile('fotos')) {
            foreach ($request->file('fotos') as $file) {
                $caminhoFoto = $file->store('foto','public');
                Foto::create([
                    'ecoponto_id'=> $ecoponto->id,
                    'imagem'=> $caminhoFoto
                ]);
            }
        }
            
        return redirect()->route('ecopontos.index')->with('sucesso','Cadastro Realizado com Sucesso!');
    }

        // dd($request);

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
            'endereco' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'funcionamento' => 'required',
            'descricao' => 'required',
            'lixos' => 'required'
        ]);

        $categoria =  Ecoponto::findOrFail($id);

        $categoria->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'funcionamento' => $request->funcionamento,
            'descricao' => $request->descricao,
            'lixos' => $request->lixos
        ]);

        return redirect()->route('ecopontos.index')->with('sucesso', 'ecoponto atualizado com sucesso!!');
    }

    public function destroy(string $id)
    {
        try {
            $ecoponto = Ecoponto::findOrFail($id);
            foreach ($ecoponto->fotos as $foto) {
                Storage::disk('public')->delete($foto->imagem);
                $foto->delete();
            }
            $ecoponto->delete();
            return redirect()->route('ecopontos.index')->with('sucesso', 'Ecoponto deletado com sucesso!!!');
        } catch (\Exception $e) {
            return redirect()->route('ecopontos.index')->with('error', 'Erro ao deletar o ecoponto');
        }

    }
}