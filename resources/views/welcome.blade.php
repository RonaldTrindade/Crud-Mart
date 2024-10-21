<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #FFD700, #32CD32); /* Amarelo e verde em degradê */
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            color: white;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .btn-entrar {
            padding: 15px 30px;
            font-size: 1.5rem;
            color: #fff;
            background-color: #228B22; /* Verde escuro */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-entrar:hover {
            background-color: #006400; /* Tom mais escuro ao passar o mouse */
        }
        img {
            width: 100%;
            height: auto; /* Mantém a proporção da imagem */
            margin-bottom: 1px; /* Espaço entre a imagem e o título */
        }
    </style>
    
</head>
<body>
    <div class="container">
        <img src="{{ asset('imagens/logo-mini.svg') }}" alt="Imagem de boas-vindas">
        <h1>Bem-Vindo</h1>
        <h2>O Melhor que Há!</h2>
        <a href="{{ route('telaLogin') }}">
            <button
            class="btn-entrar"> Entrar
            </button>
        </a>
    </div>
</body>
</html>
