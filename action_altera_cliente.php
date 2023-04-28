<?php
    include_once 'cabecalho.php';
    require_once 'conexao.php';

    $codigo=$_POST['id'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $sexo=$_POST['sexo'];
    $datanasc=$_POST['datanasc'];
    $endereco=$_POST['endereco'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $senha=$_POST['senha'];
    
    $altera=$conecta->prepare("UPDATE usuario SET nome=:nome, email=:email, telefone=:telefone, sexo=:sexo, data_nasc=:datanasc, endereco=:endereco, cidade=:cidade, estado=:estado, senha=:senha where id=:id");

    $altera->bindValue(':id', $codigo);
    $altera->bindValue(':nome', $nome);
    $altera->bindValue(':email', $email);
    $altera->bindValue(':telefone', $telefone);
    $altera->bindValue(':sexo', $sexo);
    $altera->bindValue(':datanasc', $datanasc);
    $altera->bindValue(':endereco', $endereco);
    $altera->bindValue(':cidade', $cidade);
    $altera->bindValue(':estado', $estado);
    $altera->bindValue(':senha', $senha);

    $altera->execute();
    header('Location:lista.php');

?>

<?php
    include_once 'rodape.php';
?>