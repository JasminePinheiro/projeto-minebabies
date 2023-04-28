<?php
    session_start();
    //print_r($_SESSION);
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['email']) == true)) //caso não exista as variáveis email e senha na seção
    {
        unset($_SESSION['email']);  //se não encontrar os valores corretos, irá destruir qualquer tipo de dado
        unset($_SESSION['senha']);
        header('Location: login.php'); //ele retornará para a página login.php, se não existir nenhuma sessão aberta
    }
    $logado = $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>compras</title>
      <!-- Folha de estilo -->
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>   <!-- Ícone de barrinhas -->

    <img src="imagens/logo.png"><a href="#" class="logo">MineBabies<span>&#x1F476</span></a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="sair.php">Sair</a>
    </nav>
</header>
<section class="home" id="home">

    <div class="conteudo">
    <?php echo"<h1>Seja Bem vindo $logado</h1>"?>
       <span>Agradecemos por comprar conosco</span>
    </div>
    
</section>
</body>
</html>