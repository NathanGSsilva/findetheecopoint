<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Hash;
use Illuminate\Http\Request;

class UsuarioControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        try {

            $usuarios = User::all();
      
            // $categorias = $categorias->map(function ($categoria) {
            // if ($categoria->imagem) {
            //     $categoria->imagem = str_replace("http://projetobookmenow.test", "http://127.165.25.65", $categoria->imagem);
            //   }
            //   return $categoria;
            // });
      
            return response()->json($usuarios, 200);
          } catch (Exception $e) {
            return response()->json(['error' => 'Erro ao listar as categorias'], 500);
          }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.usuarios.cadastrar");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|string|email|unique:usuarios',
            'password' => 'required|min:8|confirmed'
        ]);

        $usuario = User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => $request->password
            
        ]);

        try {
            return response()->json([$usuario, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = User::findOrFail($id);

        try {
            return response()->json([$usuario, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::findOrFail($id);

        try {
            return response()->json([$usuario, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|string|email|unique:usuarios,email,' . $id,
            'password' => 'nullable|min:8|confirmed'
        ]);

        $usuario =  User::findOrFail($id);

        $usuario->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $usuario->password
        ]);

        try {
            return response()->json([$usuario, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $usuario = User::findOrFail($id);
            $usuario->delete();

            return response()->json([$usuario, 200]);

        } catch (\Exception $e) {

            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }
}


/*

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
  
    public function index()
    {
        $usuarios = User::paginate(10);

        return view('admin.usuarios.index',compact('usuarios')); 
    }

    public function create()
    {
        return view('admin.usuarios.cadastrar');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required',
            'email' => 'required|string|email|unique:usuarios',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('usuario.index')->with('sucesso','Usuario cadastrado com sucesso!!');

        // dd($request);
    }

    public function show(string $id)

    {
        $usuario = User::findOrFail($id);
       return view('admin.usuarios.visualizar', compact('usuario'));
    }

    public function edit(string $id)
    {

        $usuario = User::findOrFail($id);
        return view('admin.usuarios.editar', compact('usuario'));
    }

    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'nome' => 'required',
            'email' => 'required|string|email|unique:usuarios,email,' . $id,
            'password' => 'nullable|min:8|confirmed',
        ]);

        $usuario =  User::findOrFail($id);

        $usuario->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $usuario->password
        ]);

        return redirect()->route('usuario.index')->with('sucesso', 'usuario atualizado com sucesso!!');
    }

    public function destroy(string $id)
    {
        try{

            $usuario = User::FindOrFail($id);
            $usuario->delete();
            return redirect()->route('usuario.index')->with('success', 'Usuario deletado com sucesso!!');
            
        }catch(\Exception $e){
            
            return redirect()->route('usuario.index')->with('error', 'Usuario deletado com sucesso!!!');
        
        };

    }
}

*/