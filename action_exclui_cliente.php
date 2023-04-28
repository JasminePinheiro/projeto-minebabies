<?php
    include_once 'cabecalho.php';
    require_once 'conexao.php';

    $codigo=$_GET['id'];
    
    $exclui=$conecta->prepare('DELETE FROM usuario WHERE id=:codigo');
    $exclui->bindValue(':codigo', $codigo);
    $exclui->execute();
    header('Location:lista.php');
   


    include_once 'rodape.php';
?>