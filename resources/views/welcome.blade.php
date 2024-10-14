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
            text-shadow: 
                -1px -1px 0 black,  
                 1px -1px 0 black,
                -1px  1px 0 black,
                 1px  1px 0 black;
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

                .logo {
            width: 300px; /* Altere conforme necessário */
            height: auto; /* Mantém a proporção */
            display: flex; /* Para centralizar, se necessário */
            margin: 0 auto; /* Centraliza a imagem se a largura for menor que o container */
            
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-Vindo!</h1>
        <img src="{{ asset('images/logo-mini.svg') }}" alt="logo" class="logo">
        <a href="{{ route('views.entrada.login') }}" class="btn-entrar">Entrar</a>
    </div>

</body>
</html>
