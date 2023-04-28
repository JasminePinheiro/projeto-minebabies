<?php
    session_start();
    //print_r($_REQUEST); ***TESTE PARA SABER SE DEU CERTO O LOGIN
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) //verfica se tem valores os campos
    {
        //se existir essa variável ele acessa o sistema 
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        /*print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha);*/
        $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        /*print_r($result);  se encontrar os dados no banco de dados, retornará na tela [num_rows] => 1*/
    }
        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);  //se não encontrar os valores corretos, irá destruir qualquer tipo de dado
            unset($_SESSION['senha']);
            header('Location: login.php');

        }
        else 
        {
            $_SESSION['email'] = $email; //passando as variáveis para as sessões
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }



   
?>
