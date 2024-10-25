<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo</title>
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
            background: linear-gradient(45deg, #FFD700, #32CD32); /* Amarelo e verde em degradê */
            font-family: Arial, sans-serif;
            overflow: hidden; /* Evita rolagem */
        }

        /* Animações de entrada */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            text-align: center;
            color: white;
            animation: fadeInUp 1.2s ease forwards; /* Animação do container */
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeInUp 1.5s ease forwards;
            animation-delay: 0.5s;
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
            opacity: 0;
            animation: fadeInUp 1.5s ease forwards;
            animation-delay: 1s;
        }

        .btn-entrar:hover {
            background-color: #006400; /* Tom mais escuro ao passar o mouse */
        }

        img {
            width: 100%;
            height: auto; /* Mantém a proporção da imagem */
            margin-bottom: 1px; /* Espaço entre a imagem e o título */
            opacity: 0;
            animation: fadeInUp 1.2s ease forwards;
        }
    </style>

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
