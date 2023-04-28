<?php
    include_once 'cabecalho.php';
    include_once 'conexao.php';
    
    $consulta=$conecta->prepare('Select * from usuario'); //A função prepare busca os dados e coloca na variável consulta
    $consulta->execute();


?>
    
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
    <div class="card">
        <h2> Listagem de Clientes</h2>
    </div>
    <table>
        <tr><th> Código </th><th> Nome </th> <th>Email </th> <th>Telefone</th> <th>Sexo</th> <th>Data Nasc.</th> <th>Endereço</th> <th>Cidade</th> <th>Estado</th> <th>Senha</th>
        <th colspan="2"> Ações </th> </tr>
<?php
        while($linha=$consulta->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>{$linha['id']}</td>";
            echo "<td>{$linha['nome']}</td>"; 
            echo "<td>{$linha['email']}</td>";
            echo "<td>{$linha['telefone']}</td>"; 
            echo "<td>{$linha['sexo']}</td>"; 
            echo "<td>{$linha['data_nasc']}</td>"; 
            echo "<td>{$linha['endereco']}</td>"; 
            echo "<td>{$linha['cidade']}</td>"; 
            echo "<td>{$linha['estado']}</td>"; 
            echo "<td>{$linha['senha']}</td>"; 
            echo "<td><a href='altera_cliente.php?id={$linha['id']}' class='btn-floating pink'><i class='material-icons'>edit</i></a></td>";
            echo "<td><a href='exclui_cliente.php?id={$linha['id']}' class='btn-floating purple'><i
            class='material-icons'>delete</i></a></td></tr>"; 
                    } //fetch é uma matriz onde se encontra os dados/registros
          // O PDO (PHP Data Object) é uma extensão da linguagem PHP para acesso a banco de dados. 
     echo "</table>";
    echo "<a href='form_adiciona_cliente.php' class='btn'>Adicionar cliente</a>";
    
    include_once 'rodape.php';



/* site onde se encontra os links usados da página https://materializecss.com/getting-started.html
     site usado par criar o nosso banco de dados http://localhost/phpmyadmin/
*/

?>