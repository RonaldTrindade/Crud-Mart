<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

        .fade-in{opacity: 0;
                            animation: fadeIn 0.5s forwards;}
                                
                                

                                .fade-out {
                                    opacity: 1;
                                    animation: fadeOut 0.5s forwards;
                                }

                                @keyframes fadeIn {
                                    from { opacity: 0; }
                                    to { opacity: 1; }
                                }

                                @keyframes fadeOut {
                                    from { opacity: 1; }
                                    to { opacity: 0; }
                                }

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

        .login-container {
            background-color: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #32CD32;
            margin-bottom: 20px;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-login {
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

        .btn-login:hover {
            background-color: #006400; /* Tom mais escuro ao passar o mouse */
        }

        .login-container a {
            display: block;
            margin-top: 15px;
            color: black;
            text-decoration: none;
        }

        .login-container a:hover {
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
    </style>
</head>

<script>document.addEventListener('DOMContentLoaded', function () {
            // Aplica o efeito de fade-in ao carregar
            document.body.classList.add('fade-in');

            // Adiciona o fade-out e redireciona ao clicar em um link
            document.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function (e) {
                    const href = this.getAttribute('href'); // Pega o destino do link

                    // Só continua se o link tiver um destino válido
                    if (href) {
                        e.preventDefault(); // Previne o carregamento imediato
                        
                        // Remove fade-in e adiciona fade-out para transição de saída
                        document.body.classList.remove('fade-in');
                        document.body.classList.add('fade-out');

                        // Redireciona após o tempo da animação (500 ms)
                        setTimeout(() => {
                            window.location.href = href;
                        }, 500); // Tempo de espera em milissegundos
                    }
                });
            });

            // Fallback: caso a animação falhe, redireciona normalmente
            window.addEventListener('pageshow', function () {
                document.body.classList.remove('fade-out');
            });
        });</script>
        
<body>  

    <div class="login-container">
        <h1>Login</h1>
        
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

        <!-- Exibir validação de erro de campos -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
            <input type="password" placeholder="senha" name="password" required>

            <button type="submit" class="btn-login">Entrar</button>
        </form>
        <a href="{{ route('telaCadastro') }}">Cadastre-se</a>
    </div>

</body>
</html>
