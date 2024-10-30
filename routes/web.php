<?php

use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

// Rota inicial para a página de boas-vindas
Route::get('/', function () {
    return view('welcome');
});

// Rotas para autenticação e cadastro de usuário
Route::get('/login', [UsersController::class, 'telaLogin'])->name('telaLogin');
Route::post('/login', [UsersController::class, 'login'])->name('login');
Route::get('/cadastrar', [UsersController::class, 'telaCadastro'])->name('telaCadastro');
Route::post('/cadastrar', [UsersController::class, 'store'])->name('cadastrar');

// Rota para a tela principal após login
Route::get('/home', [HomeController::class, 'telaMenu'])->name('telaMenu');

// Rotas para gerenciamento de estoque
Route::get('/home/estoque', [EstoqueController::class, 'telaEstoque'])->name('telaEstoque'); // Exibe a tela de estoque
Route::get('/home/estoque/create', [EstoqueController::class, 'create'])->name('estoque.create'); // Formulário de criação
Route::post('/home/estoque/adicionar', [EstoqueController::class, 'store'])->name('adicionarEstoque'); // Adiciona novo estoque

// Rotas para visualização, edição e exclusão de estoque
Route::get('/home/estoque/{id}', [EstoqueController::class, 'show'])->name('estoque.show'); // Visualizar estoque específico
Route::get('/home/estoque/{id}/edit', [EstoqueController::class, 'edit'])->name('estoque.edit'); // Formulário de edição
Route::put('/home/estoque/{id}', [EstoqueController::class, 'update'])->name('estoque.update'); // Atualiza estoque específico
Route::delete('/home/estoque/{id}', [EstoqueController::class, 'destroy'])->name('estoque.destroy'); // Exclui estoque específico
