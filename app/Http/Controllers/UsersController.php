<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function telaLogin(){
        return view('entrada.login');
    }

    public function login(){
        $email = request('email');
        $senha = request('senha');

        if($email == 'admin' && $senha == '123456'){
            return redirect()->route('views.entrada.menu');
        } else {
            return redirect()->route('views.entrada.login')->with('mensagem', 'Email ou senha inválidos');
        }
    }

    public function index()
    {
        
    }

    public function telaCadastro(){
        return view('entrada.cadastro');
    }
   
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:users',
            'senha' => 'required|min:6',
            'dataNascimento' => 'required|date',
        ]);
    
        UsersModel::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => bcrypt($request->senha),
            'dataNascimento' => $request->dataNascimento,
        ]);
    
        return redirect()->route('entrada.login')
                        ->with('success', 'Usuário criado com sucesso.');
    }

   
    public function show(string $id)
    {
        
    }

   
    public function edit(string $id)
    {
        
    }

    
    public function update(Request $request, string $id)
    {
        
    }

    
    public function destroy(string $id)
    {
        
    }
}
