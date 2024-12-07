<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ecoponto;
use App\Models\Foto;
use Exception;
use Illuminate\Http\Request;
use Storage;

class EcoPontoControllerApi extends Controller
{
  
    public function index()
{
    $ecopontos = Ecoponto::with('fotos')->get();

    $ecopontos = $ecopontos->map(function ($ecoponto) {
        if ($ecoponto->fotos->isNotEmpty()) { // Verifica se há fotos
            $ecoponto->fotos[0]->imagem = asset('storage/'.$ecoponto->fotos[0]->imagem);
        }
        return $ecoponto;
    });

    return response()->json($ecopontos);
}

    public function store(Request $request)
  {
    $request->validate([
            'id' => 'required',
            'nome' => 'required',
            'endereco' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'funcionamento' => 'required',
            'descricao' => 'required',
            'lixos' => 'required'
    ]);

    $ecoponto = Ecoponto::create($request->all());

    if ($request->hasFile('foto')) {
      foreach ($request->file('foto') as $file) {
        $caminhoFoto = $file->store('fotos', 'public');
        Foto::create([
         'ecoponto_id' => $ecoponto->id,
          'imagem' => $caminhoFoto
        ]);
      }
    }

    return response()->json(['message' => 'Cadastro realizado com sucesso!', 'servico' => $ecoponto], 201);
  }

    public function show(string $id)

    {
        $ecoponto = Ecoponto::findOrFail($id);

        try {
            return response()->json([$ecoponto, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    public function edit(string $id)
    {

        $ecoponto = Ecoponto::findOrFail($id);

        try {
            return response()->json([$ecoponto, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
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

        $ecoponto =  Ecoponto::findOrFail($id);

        $ecoponto->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'funcionamento' => $request->funcionamento,
            'descricao' => $request->descricao,
            'lixos' => $request->lixos
        ]);

        try {
            return response()->json([$ecoponto, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
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
      
            return response()->json(['message' => 'Ecoponto deletado com sucesso!'], 200);
          } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao deletar o serviço'], 500);
          }
        }

    }
