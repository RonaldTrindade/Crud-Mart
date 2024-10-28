<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Ilustrativo</title>
    <style>
        /* Estilos globais */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        /* Cabeçalho */
        header {
            background-color: #228B22;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        nav {
            display: flex;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            margin-left: 15px;
            border-radius: 5px;
            transition: background 0.3s ease;
            cursor: pointer;
        }

        nav a:hover {
            background-color: #006400;
        }

        /* Conteúdo Principal */
        .container {
            display: flex;
            padding: 20px;
        }

        /* Barrinha do usuário */
        .user-bar {
            display: none; /* Começa oculta */
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 5px;
            margin-top: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilos do formulário */
        .user-bar h3 {
            margin: 0;
        }

        .user-bar p {
            margin: 5px 0;
        }

        .btn-cadastrar {
            padding: 10px 20px;
            font-size: 1rem;
            color: white;
            background-color: #228B22;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .btn-cadastrar:hover {
            background-color: #006400;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="logo">Controle de Estoque</div>
        <nav>
            <a href="#produtos">Produtos</a>
            <a href="#estoque">Estoque</a>
            <a href="#usuario" onclick="toggleUserBar(event)">Usuário</a>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <div class="container">
        <div class="content">
            <h2>Bem-vindo ao Controle de Estoque!</h2>
            <p>Aqui você pode gerenciar seus produtos e estoque.</p>

            <!-- Barrinha do usuário -->
            <div class="user-bar" id="userBar">
                <h3>Informações do Usuário</h3>
                <p><strong>Nome do Usuário:</strong> João Silva</p>
                <p><strong>ID do Usuário:</strong> 12345</p>
                <button class="btn-cadastrar">Logout</button>
            </div>
        </div>
    </div>

    <script>
        function toggleUserBar(event) {
            event.preventDefault(); // Evita o comportamento padrão do link
            const userBar = document.getElementById('userBar');
            userBar.style.display = userBar.style.display === 'none' || userBar.style.display === '' ? 'block' : 'none';
        }
    </script>
</body>
</html>
