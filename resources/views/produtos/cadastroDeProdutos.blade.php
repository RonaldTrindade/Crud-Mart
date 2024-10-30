<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Produtos</title>
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

        /* Estilos para a tabela de produtos */
        .product-table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .product-table th, .product-table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .product-table th {
            background-color: #228B22;
            color: white;
        }

        /* Estilos para o formulário de adicionar produtos */
        .add-product-form {
            margin-top: 20px;
            padding: 20px;
            background-color: #e0e0e0;
            border-radius: 5px;
        }

        .add-product-form input, .add-product-form button {
            margin: 5px 0;
            padding: 10px;
            width: 100%;
            max-width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .add-product-form button {
            background-color: #228B22;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-product-form button:hover {
            background-color: #006400;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="logo">Controle de Estoque</div>
        <nav>
            <a href="{{ route('produtos') }}">Produtos</a>
            <a href="{{ route('estoque') }}">Estoque</a>
            <a href="#usuario" onclick="toggleUserBar(event)">Usuário</a>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <div class="container">
        <h2>Gerenciamento de Produtos</h2>
        
        <!-- Barrinha do usuário -->
        <div class="user-bar" id="userBar">
            <h3>Informações do Usuário</h3>
            <p><strong>Nome do Usuário:</strong> <span id="userName"></span></p>
            <p><strong>ID do Usuário:</strong> <span id="userId"></span></p>
            <button class="btn-cadastrar" onclick="logout()">Logout</button>
        </div>

        <!-- Formulário para adicionar produtos -->
        <div class="add-product-form">
            <h3>Adicionar Novo Produto</h
