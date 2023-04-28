<title>Lista de clientes</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:url(../minebabies/imagens/homebb.jpg)no-repeat;
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }
        h2{         
            font-size: 48px;
            color: rgba(201, 81, 238, 0.603);
            font-family:'Century Gothic';
            font-weight:bold;
        }
    </style>
</head>
<body>

<?php
    include_once 'cabecalho.php';
    require_once 'conexao.php';

    $codigo=$_GET['id'];
    
    $exclui=$conecta->prepare('SELECT * FROM usuario WHERE id=:codigo');
    $exclui->bindValue(':codigo',$codigo);
    $exclui->execute();

    $resultado=$exclui->fetch(PDO::FETCH_ASSOC);
    echo "<div class='row'>";
        echo "<div class='col s12 m6 push-m3'>";
            echo "<h2>Excluindo cliente </h2>";
            echo "Nome = ".$resultado['nome']."<br>";
            echo "Email = ".$resultado['email']."<br>";
            echo "Telefone = ".$resultado['telefone']."<br>";
            echo "Sexo = ".$resultado['sexo']."<br>";
            echo "Data Nasc.= ".$resultado['data_nasc']."<br>";
            echo "Endereco.= ".$resultado['endereco']."<br>";
            echo "Cidade.= ".$resultado['cidade']."<br>";
            echo "Estado.= ".$resultado['estado']."<br>";
            echo "Senha.= ".$resultado['senha']."<br>";
            echo "<a href='lista.php' class='btn'>Listagem de clientes</a>";
            echo "<a href='action_exclui_cliente.php?id=$codigo' class='btn red'>Sim, exclui o cliente</a>";
        echo "</div>";
    echo "</div>";


    include_once 'rodape.php';
?>

