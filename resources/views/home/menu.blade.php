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
        }

        nav a:hover {
            background-color: #006400;
        }

        /* Conteúdo Principal */
        .container {
            display: flex;
            padding: 20px;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            padding: 20px;
            border-radius: 5px;
            margin-right: 20px;
        }

        .sidebar h2 {
            font-size: 1.2rem;
            color: #FFD700;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            transition: background 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        /* Conteúdo da Página */
        .content {
            flex-grow: 1;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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

        .settings-icon {
            width: 30px;
            height: 30px;
            background-color: #FFD700;
            display: inline-block;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            color: #333;
            font-weight: bold;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="logo">Sistema de Estoque</div>
        <nav>
            <a href="#cadastrarEstoque">Cadastrar Estoque</a>
            <a href="#configuracoes">Configurações</a>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Menu</h2>
            <a href="#cadastrarEstoque">Cadastrar Estoque</a>
            <a href="#configuracoes">Configurações</a>
        </div>

        <!-- Área de Conteúdo -->
        <div class="content">
            <!-- Seção de Cadastrar Estoque -->
            <section id="cadastrarEstoque">
                <h1>Cadastrar Estoque</h1>
                <p>Preencha as informações para cadastrar um novo produto no estoque.</p>
                <button class="btn-cadastrar">Cadastrar Produto</button>
            </section>

            <!-- Seção de Configurações -->
            <section id="configuracoes" style="margin-top: 40px;">
                <h1>Configurações</h1>
                <p>Ajuste as preferências do sistema e suas configurações de perfil.</p>
                <div class="settings-icon">⚙️</div>
            </section>
        </div>
    </div>
</body>
</html>