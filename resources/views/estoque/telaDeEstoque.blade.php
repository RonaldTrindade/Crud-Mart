<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Estoque</title>
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
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        /* Formulário de criação de estoque */
        .form-container, .filter-container, .estoque-list {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
        }

        .form-container h2, .estoque-list h3 {
            margin: 0 0 15px 0;
        }

        /* Estilo dos campos de entrada */
        input[type="text"], input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .btn-submit, .btn-filter {
            padding: 10px 15px;
            font-size: 1rem;
            color: white;
            background-color: #228B22;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover, .btn-filter:hover {
            background-color: #006400;
        }

        /* Lista de estoques */
        .estoque-item {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .estoque-item:last-child {
            border-bottom: none;
        }

        /* Estilo da mensagem */
        .message {
            margin: 10px 0;
            font-weight: bold;
        }

        /* Seção do usuário */
        .user-bar {
            display: none;
            margin-top: 20px;
            padding: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
            width: 100%;
            max-width: 500px;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="logo">Controle de Estoque</div>
        <nav>
            <a href="#produtos">Produtos</a>
            <a href="#estoque" class="active">Estoque</a>
            <a href="#usuario" onclick="toggleUserBar(event)">Usuário</a>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <div class="container">
        <!-- Formulário de criação de estoque -->
        <div class="form-container">
            <h2>Criar Estoque</h2>
            <form action="{{ route('adicionarEstoque') }}" method="POST">
                @csrf
                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" name="descricao" required>

                <label for="quantidade">Quantidade:</label>
                <input type="number" id="quantidade" name="quantidadeDeProdutos" required min="1">

                <button type="submit" class="btn-submit">Criar Estoque</button>
            </form>

            @if(session('success'))
                <div class="message">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="message" style="color: red;">{{ session('error') }}</div>
            @endif
        </div>

        <!-- Filtro de Estoques -->
        <div class="filter-container">
            <input type="number" id="filterId" placeholder="Filtrar pelo ID do estoque">
            <button onclick="filterById()" class="btn-filter">Filtrar</button>
        </div>

        <!-- Lista de Estoques -->
        <div class="estoque-list">
            <h3>Estoques Cadastrados</h3>
            <div id="estoqueItems">
                @foreach($estoques as $estoque)
                    <div class="estoque-item" data-id="{{ $estoque->id }}">
                        <strong>ID:</strong> {{ $estoque->id }} <br>
                        <strong>Descrição:</strong> {{ $estoque->descricao }} <br>
                        <strong>Quantidade:</strong> {{ $estoque->quantidadeDeProdutos }}
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Barra de usuário -->
        <div id="userBar" class="user-bar">
            <strong>Nome do Usuário:</strong> <span id="userName"></span> <br>
            <strong>ID do Usuário:</strong> <span id="userId"></span>
        </div>
    </div>

    <script>
        // Função para alternar a exibição da barra do usuário
        function toggleUserBar(event) {
            event.preventDefault();
            const userBar = document.getElementById('userBar');
            userBar.style.display = userBar.style.display === 'none' || userBar.style.display === '' ? 'block' : 'none';
            loadUserData();
        }

        // Função de filtragem por ID
        function filterById() {
            const filterId = document.getElementById('filterId').value;
            const items = document.querySelectorAll('.estoque-item');

            items.forEach(item => {
                if (filterId && item.getAttribute('data-id') !== filterId) {
                    item.style.display = 'none';
                } else {
                    item.style.display = 'block';
                }
            });
        }

        // Função para carregar dados do usuário
        function loadUserData() {
            const userName = localStorage.getItem('userName') || 'Usuário';
            const userId = localStorage.getItem('userId') || '12345';
            document.getElementById('userName').textContent = userName;
            document.getElementById('userId').textContent = userId;
        }

        // Carrega os dados ao abrir a página
        document.addEventListener("DOMContentLoaded", loadUserData);
    </script>
</body>
</html>
