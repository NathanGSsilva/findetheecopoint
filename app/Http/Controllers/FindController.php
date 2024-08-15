<?php

namespace App\Http\Controllers;

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

}




