<?php
require "config.php";

$id = filter_input(INPUT_POST, "id");
$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$data = filter_input(INPUT_POST, "nascimento");
$cidade = filter_input(INPUT_POST, "cidade");

if($id && $nome && $email && $data && $cidade){

    $sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, nascimento = :nascimento, cidade = :cidade WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":nascimento", $data);
    $sql->bindValue(":cidade", $cidade);

    $sql->execute();

    header("Location: index.php");
    exit;
}else{
    header("Location: adicionar.php");
    exit;
}
?>