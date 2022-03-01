<?php
        require "config.php";
?>
<?php
require "config.php";
$list= [];

$sql = $pdo->query("SELECT * FROM usuarios");
if($sql->rowCount() > 0) {

    $list = $sql->fetchAll(PDO::FETCH_ASSOC);
}


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
        <div class="menu">
            <button class="botao0"><a href="adicionar.php">CADASTRAR</a></button>
            <h1>Listagem de Clientes</h1>
            <input type="search" placeholder="Pesquisar...">
        </div>
    </div>
    <div class="tabela" >
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Nascimento</th>
                <th>Cidade</th>
                <th>Status</th>
            </tr>
            <?php foreach($list as $usuario):?>
                <tr>
                    <td><?=$usuario["id"];?></td>
                    <td><?=$usuario["nome"];?></td>
                    <td><?=$usuario["email"];?></td>
                    <td><?=$usuario["nascimento"];?></td>
                    <td><?=$usuario["cidade"];?></td>
                    <td class="status">
                        <button class=bt0><a href="editar.php?id=<?=$usuario["id"];?>">Alterar</a></button>
                        <button class=bt0><a href="deletar.php?id=<?=$usuario["id"];?>">Deletar</a></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>  
    </div>
</body>
</html>