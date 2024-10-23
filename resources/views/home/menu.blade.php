<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu </title>
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

        .menu-container {
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn {
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

        .btn:hover {
            background-color: #006400; /* Tom mais escuro ao passar o mouse */
        }

        .menu-container a {
            display: block;
            margin-top: 15px;
            color: black;
            text-decoration: none;
        }

        .menu-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>  

    <div class="menu-container">
        <h1>Menu Principal</h1>

        <h2>Estoque</h2>
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produto 1</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Produto 2</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Produto 3</td>
                    <td>5</td>
                </tr>
                <!-- Adicione mais produtos conforme necessário -->
            </tbody>
        </table>

        <button class="btn">Adicionar Produto</button>
        <button class="btn">Visualizar Vendas</button>
        <button class="btn">Sair</button>
    </div>

</body>
</html>
