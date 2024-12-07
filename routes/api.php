<?php

use App\Http\Controllers\Api\EcoPontoControllerApi;
use App\Http\Controllers\Api\ParceiroControllerApi;
use App\Http\Controllers\Api\UsuarioControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('usuarios', [UsuarioControllerApi::class, 'index']);
Route::post('usuarios', [UsuarioControllerApi::class, 'store']);
Route::get('usuarios/{id}', [UsuarioControllerApi::class, 'show']);
Route::put('usuarios/{id}', [UsuarioControllerApi::class, 'update']);
Route::delete('usuarios/{id}', [UsuarioControllerApi::class, 'destroy']);

Route::get('parceiros', [ParceiroControllerApi::class, 'index']);
Route::post('parceiros', [ParceiroControllerApi::class, 'store']);
Route::get('parceiros/{id}', [ParceiroControllerApi::class, 'show']);
Route::put('parceiros/{id}', [ParceiroControllerApi::class, 'update']);
Route::delete('parceiros/{id}', [ParceiroControllerApi::class, 'destroy']);

//api ecopontos
Route::get('ecopontos', [EcoPontoControllerApi::class, 'index']);
Route::post('ecopontos', [EcoPontoControllerApi::class, 'store']);
Route::get('ecopontos/{id}', [EcoPontoControllerApi::class, 'show']);
Route::put('ecopontos/{id}', [EcoPontoControllerApi::class, 'update']);
Route::delete('ecopontos/{id}', [EcoPontoControllerApi::class, 'destroy']);
