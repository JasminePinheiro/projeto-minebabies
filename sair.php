<?php
    session_start();
    unset($_SESSION['email']);  //se não encontrar os valores corretos, irá destruir qualquer tipo de dado
    unset($_SESSION['senha']);
    header('Location: index.php'); //ele retornará para a página login.php, se não existir nenhuma sessão aberta
?>
