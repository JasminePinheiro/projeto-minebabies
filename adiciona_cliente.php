<?php
      include_once 'conexao.php';

      if(isset($_POST['btncadastrar'])){
        $nome=filter_input(INPUT_POST,'nome');
        $email=filter_input(INPUT_POST,'email');
        $telefone=filter_input(INPUT_POST,'telefone');
        $sexo=filter_input(INPUT_POST,'sexo');
        $datanasc=filter_input(INPUT_POST,'datanasc');
        $endereco=filter_input(INPUT_POST,'endereco');
        $cidade=filter_input(INPUT_POST,'cidade');
        $estado=filter_input(INPUT_POST,'estado');
        $senha=filter_input(INPUT_POST,'senha');

        $sql=$conecta->prepare('INSERT INTO usuario (nome,email,telefone,sexo,data_nasc,endereco,cidade,estado,senha) VALUES (:nome,:email,:telefone,:sexo,:datanasc,:endereco,:cidade,:estado,:senha)');

        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':telefone',$telefone);
        $sql->bindValue(':sexo',$sexo);
        $sql->bindValue(':datanasc',$datanasc);
        $sql->bindValue(':endereco',$endereco);
        $sql->bindValue(':cidade',$cidade);
        $sql->bindValue(':estado',$estado);
        $sql->bindValue(':senha',$senha);

        $sql->execute();
        header('Location:lista.php');
      }else {
        echo "Preencha os dados no formulário";
      }

      include_once 'rodape.php';
?>
