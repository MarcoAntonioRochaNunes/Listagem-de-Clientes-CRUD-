<?php
require "config.php";

$nome=filter_input(INPUT_POST, 'nome');
$email=filter_input(INPUT_POST, 'email');
$nascimento=filter_input(INPUT_POST, 'nascimento');
$cidade=filter_input(INPUT_POST, 'cidade');


if($nome && $email && $nascimento && $cidade){


    $sql = $pdo->prepare("INSERT INTO usuarios (nome, email, nascimento, cidade) VALUES (:nome, :email, :nascimento, :cidade)");
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":nascimento", $nascimento);
            $sql->bindValue(":cidade", $cidade);

            $sql->execute();

    header("Location:index.php");
    exit;

}else{
    header("Location:index.php");
    exit;
}

?>