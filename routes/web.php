<?php

use App\Http\Controllers\EcoPontoController;
use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\ParceiroController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FindController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FindController::class, "home"])->name('home');
Route::get('/cadastro', [FindController::class, "cadastro"])->name('cadastro');
Route::get('/categoria', [FindController::class, "categoria"])->name('categoria');
Route::get('/educativo', [FindController::class, "educativo"])->name('educativo');
Route::get('/politica', [FindController::class, "politica"])->name('politica');
Route::get('/seja-um-parceiro', [FindController::class, "sejaumparceiro"])->name('sejaumparceiro');
Route::get('/sobre-nos', [FindController::class, "sobrenos"])->name('sobrenos');


//DASHBOARD
Route::get('/admin', [DashboardController::class, "dashboard"])->name('dashboard');

//ROTAS ECOPONTOS
Route::get('/admin/ecopontos',[EcoPontoController::class, "index"])->name('ecopontos.index');
Route::get('/admin/ecopontos/cadastrar', [EcoPontoController::class, "create"])->name('ecopontos.create');
Route::post('/admin/ecopontos/cadastrar/salvar', [EcoPontoController::class, "store"])->name('ecopontos.store');
Route::get('/admin/ecopontos/editar/{id}', [EcoPontoController::class, "edit"])->name('ecopontos.edit');
Route::get('/admin/ecopontos/visualizar/{id}', [EcoPontoController::class, "show"])->name('ecopontos.show');
Route::put('/admin/ecopontos/atualizar/{id}',[EcoPontoController::class, "update"])->name('ecopontos.update');
Route::delete('/admin/ecopontos/deletar/{id}',[EcoPontoController::class, "destroy"])->name('ecopontos.destroy');
Route::get('/admin/ecopontos/buscar',[EcoPontoController::class, "buscar"])->name('ecopontos.buscar');

//ROTAS PARCEIROS
Route::get('/admin/parceiros',[ParceiroController::class, "index"])->name('parceiros.index');
Route::get('/admin/parceiros/cadastrar', [ParceiroController::class, "create"])->name('parceiros.create');
Route::post('/admin/parceiros/cadastrar/salvar', [ParceiroController::class, "store"])->name('parceiros.store');
Route::get('/admin/parceiros/editar/{id}', [ParceiroController::class, "edit"])->name('parceiros.edit');
Route::get('/admin/parceiros/visualizar/{id}', [ParceiroController::class, "show"])->name('parceiros.show');
Route::put('/admin/parceiros/atualizar/{id}',[ParceiroController::class, "update"])->name('parceiros.update');
Route::delete('/admin/parceiros/deletar/{id}',[ParceiroController::class, "destroy"])->name('parceiros.destroy');

//ROTAS PARCEIROS
Route::get('/admin/usuarios',[UsuarioController::class, "index"])->name('usuarios.index');
Route::get('/admin/usuarios/cadastrar', [UsuarioController::class, "create"])->name('usuarios.create');
Route::post('/admin/usuarios/cadastrar/salvar', [UsuarioController::class, "store"])->name('usuarios.store');
Route::get('/admin/usuarios/editar/{id}', [UsuarioController::class, "edit"])->name('usuarios.edit');
Route::get('/admin/usuarios/visualizar/{id}', [UsuarioController::class, "show"])->name('usuarios.show');
Route::put('/admin/usuarios/atualizar/{id}',[UsuarioController::class, "update"])->name('usuarios.update');
Route::delete('/admin/usuarios/deletar/{id}',[UsuarioController::class, "destroy"])->name('usuarios.destroy');

//ROTAS AUTENTICAÇÃO
 