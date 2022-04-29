<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/logout', function(){
    return view('index');
});

Route::get('/', function(){
    return view('index');
});


Route::get('/listarProdutos', [PrincipalController::class, 'listar'])->name('listarProdutos');

Route::get('/cadastraProduto', [PrincipalController::class, 'cadastrar']);
Route::post('/cadastraProduto', [PrincipalController::class, 'salvar']);

Route::get('deletar/{id}', [PrincipalController::class, 'deletar']);

Route::get('/editarProduto/{id}', [PrincipalController::class, 'editar']);
Route::post('/editarProduto/{id}', [PrincipalController::class, 'atualizar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

