<?php
    require "config.php";
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="box">
        <form action="adicionar_action.php" method="POST" class="formulario">

        <input type="text" name="nome" placeholder="Nome Completo">
        <input type="email" name="email" placeholder="E-mail">
        <input type="data" name="nascimento">
        <input type="text" name="cidade" placeholder="Onde Mora? (Cidade)">

        <input type="submit" value="Cadastrar">

        </form>
    </div>
</div>