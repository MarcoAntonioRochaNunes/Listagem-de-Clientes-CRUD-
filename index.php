<?php
        require "config.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
    <div class="header">
        <div class="buttom">
            <button><a href="adicionar.php">CADASTRAR</a></button>
            <h1>Listagem de Clientes</h1>
            <input type="search" placeholder="Pesquisar...">
        </div>
    </div>
    <div class="tabela" >
        <table border="0" width=100%>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Nascimento</th>
                <th>Genero</th>
                <th>Cidade</th>
                <th>Status</th>
            </tr>
            <tr>
                <td><a href="edita.php">EDITAR</a></td>
            </tr>
        </table>  
    </div>
</body>
</html>