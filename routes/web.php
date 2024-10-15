<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');}); 
Route::get('/login',[UsersController::class,'telaLogin'])->name('views.entrada.login');
