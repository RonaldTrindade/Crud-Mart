<?php

use App\Http\Controllers\UsersController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');}); 
Route::get('/login',[UsersController::class,'telaLogin'])->name('telaLogin');
Route::post('/login', [UsersController::class,'login'])->name('login'); 
Route::get('/cadastrar', [UsersController::class,'telaCadastro'])->name('telaCadastro');
Route::post('/cadastrar', [UsersController::class,'store'])->name('cadastrar');
//Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

