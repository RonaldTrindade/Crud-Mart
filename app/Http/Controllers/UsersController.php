<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class UsersController extends Controller
{
    public function telaLogin()
    {
        return view('entrada.login');
    }

    public function login(Request $request)
    {
        // Validação do formulário
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Procurar o usuário pelo email
        $user = UsersModel::where('email', $request->email)->first();

        // Verificar se o usuário existe e se a senha está correta
        if ($user && Hash::check($request->password, $user->password)) {
            // Autenticar o usuário
            Auth::login($user);

            // Redireciona para a tela do menu com o nome e o ID do usuário
            return redirect()->route('telaMenu')
                             ->with('success', 'Login efetuado com sucesso.')
                             ->with('userId', $user->id)
                             ->with('userName', $user->name);
        } else {
            // Caso a senha ou o email estejam incorretos
            return back()->with('error', 'Email ou senha inválidos.');
        }
    }

    public function logout()
    {
        // Desloga o usuário e encerra a sessão
        Auth::logout();

        // Redireciona para a tela de login com mensagem de logout
        return redirect()->route('telaLogin')->with('success', 'Logout efetuado com sucesso.');
    }

    public function telaCadastro()
    {
        return view('entrada.cadastro');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'dataNascimento' => 'required|date',
        ]);

        try {
            // Tentativa de inserção no banco de dados
            UsersModel::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'dataNascimento' => $request->dataNascimento,
            ]);

            return redirect()->route('telaLogin')
                             ->with('success', 'Usuário criado com sucesso.');
        } catch (QueryException $e) {
            // Verifica se o erro é uma violação de chave única (erro 1062)
            if ($e->errorInfo[1] == 1062) {
                return back()->with('error', 'O email já está em uso. Por favor, escolha outro.');
            }

            // Trata outros possíveis erros de query
            return back()->with('error', 'Ocorreu um erro ao tentar registrar o usuário. Tente novamente mais tarde.');
        }
    }

    public function index()
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
