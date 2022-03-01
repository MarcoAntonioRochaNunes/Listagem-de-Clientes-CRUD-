<?php
require "config.php";

$info = [];
$id = filter_input(INPUT_GET, "id");

if($id){

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if($sql->rowCount() > 0){

        $info = $sql->fetch(PDO::FETCH_ASSOC);

    }else{
        header("Location: index.php");
        exit;
    }

}else{
    header("Location: index.php");
    exit;
}
?>

<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="box">
        <form action="editar_action.php" method="POST" class="formulario">

        <input type="text" name="nome" value="<?= $info["nome"];?>"/>
        <input type="email" name="email" value="<?= $info["email"];?>"/>
        <input type="data"  name="nascimento" value="<?= $info["nascimento"];?>"/>
        <input type="text" name="cidade" value="<?= $info["cidade"];?>"/>

        <input type="submit" value="Cadastrar">

        </form>
    </div>
</div>