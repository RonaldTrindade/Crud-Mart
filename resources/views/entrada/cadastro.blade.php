<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- Incluindo a biblioteca Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 450px; /* Ajustado para mais espaço */
            text-align: center;
            position: relative; /* Para o posicionamento do ícone */
        }

        h1 {
            color: #32CD32;
            margin-bottom: 20px;
        }

        .back-icon {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 1.5rem;
            color: #228B22; /* Cor verde igual ao botão cadastrar */
            cursor: pointer;
            transition: color 0.3s ease, background-color 0.3s ease;

        }

        /* Forçando a cor correta para o ícone */
        .back-icon i {
            color: #32CD32 !important; /* Força a cor verde no ícone */
        }

        .back-icon:hover i {
            color: #155724 !important; /* Força a cor branca no hover */
        }

      

        .form-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        label {
            width: 25%; /* Define a largura do label */
            text-align: left; /* Alinha o texto do label à esquerda */
            font-size: 1rem;
        }

        input[type="text"], input[type="email"], input[type="password"], input[type="date"] {
            width: 80%; /* Define a largura do input */
            padding: 8px;
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

        /* Estilos para as mensagens de sucesso e erro */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 1rem;
            text-align: left;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>

    <div class="cadastro-container">
        <!-- Ícone de seta para voltar ao login -->
        <a href="{{ route('login') }}" class="back-icon">
            <i class="fas fa-arrow-left"></i>
        </a>

        <h1>CADASTRAR</h1>
        
        <!-- Exibir mensagem de sucesso -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Exibir mensagem de erro -->
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('cadastrar') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" name="dataNascimento" id="dataNascimento" value="{{ old('dataNascimento') }}">
            </div>

            <!-- Exibir mensagens de validação de erro -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="btn-cadastrar">Criar</button>
        </form>
    </div>

</body>
</html>
