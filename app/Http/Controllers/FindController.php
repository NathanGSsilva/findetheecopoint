<?php

namespace App\Http\Controllers;

use App\Models\Find;
use Illuminate\Http\Request;

class FindController extends Controller
{
   public function home()
   {
      return view('index');
   }

   public function cadastro()
   {
      return view('cadastro');
   }

   public function categoria()
   {
      return view('categoria');
   }

   public function educativo()
   {
      return view('educativo');
   }

   public function politica()
   {
      return view('politica');
   }

   public function sejaumparceiro()
   {
      return view('seja-um-parceiro');
   }

   public function sobrenos()
   {
      return view('sobre-nos');
   }

   public function store(Request $request)
   {
      $request->validate([
         'nome' => 'required',
         'email' => 'required|string|email|unique:usuarios',
         'password' => 'required|min:8|confirmed'
      ]);

      Find::create([
         'nome' => $request->nome,
         'email' => $request->email,
         'password' => $request->password

      ]);

      return redirect()->route('home')->with('sucesso', 'Cadastrado concluido com sucesso!!');
   }
}




