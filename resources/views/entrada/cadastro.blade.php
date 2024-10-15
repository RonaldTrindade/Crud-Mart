<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #FFD700, #32CD32); /* Fundo degradê amarelo e verde */
            font-family: Arial, sans-serif;
        }

        .cadastro-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #32CD32;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="email"], input[type="password"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-cadastrar {
            width: 100%;
            padding: 10px;
            background-color: #228B22; /* Verde escuro */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn-cadastrar:hover {
            background-color: #006400; /* Tom mais escuro ao passar o mouse */
        }

        .cadastro-container a {
            display: block;
            margin-top: 15px;
            color: #FFD700; /* Amarelo */
            text-decoration: none;
        }

        .cadastro-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="cadastro-container">
        <h2>Cadastro</h2>
        <form
        @csrf 
        action="{{ route('cadastrar') }}" method="POST">
            <input type="text" placeholder="Nome" name="nome" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Senha" name="senha" required>
            <input type="date" placeholder="Data de Nascimento" name="dataNascimento" required>
            <button type="submit" class="btn-cadastrar">Cadastrar</button>
        </form>
        <a href="{{ route('telaLogin') }}">Voltar para Login</a>
    </div>

</body>
</html>
