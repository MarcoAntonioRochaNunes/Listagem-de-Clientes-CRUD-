<?php
require "config.php";

$id = filter_input(INPUT_GET, "id");

if($id){

    $sql = $pdo("DELETE FROM usuarios WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();
    
}

?>