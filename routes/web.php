<?php

use App\Http\Controllers\UsersController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');}); 
Route::get('/login',[UsersController::class,'telaLogin'])->name('telaLogin');
Route::post('/login', [UsersController::class,'login'])->name('login'); 
Route::get('/cadastrar', [UsersController::class,'telaCadastro'])->name('telaCadastro');
<<<<<<< HEAD
Route::post('/cadastrar', [UsersController::class,'create'])->name('cadastrar');
=======
Route::post('/cadastrar', [UsersController::class,'store'])->name('cadastrar');
>>>>>>> 71b18dea733fa74c056d295f7241dc49fd50ccad
