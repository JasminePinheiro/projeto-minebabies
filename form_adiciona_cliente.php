<?php
    include_once 'cabecalho.php';
    require_once 'conexao.php';
?>
<title> Projeto - Inclusão de cliente </title>
<style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:url(../minebabies/imagens/homebb.jpg)no-repeat;
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }
        h3{         
            font-size: 48px;
            color: rgba(201, 81, 238, 0.603);
            font-family:'Century Gothic';
            font-weight:bold;
        }
        .input-field col s12{
            color:black;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3> Inserindo clientes</h3>
            <form action="adiciona_cliente.php" method="POST">
                <div class="input-field col s12">
                    <label for="nome">Nome: </label><br>
                    <input type="text" name="nome" id="nome">
                </div>
                <div class="input-field col s12">
                    <label for="email">Email: </label><br>
                    <input type="text" name="email" id="email">
                </div>
                <div class="input-field col s12">
                    <label for="telefone">Telefone: </label><br>
                    <input type="text" name="telefone" id="telefone">
                </div>
                <div class="input-field col s12">
                    <label for="sexo">Sexo: </label><br>
                    <input type="text" name="sexo" id="sexo">
                </div>
                <div class="input-field col s12">
                    <label for="datanasc">Data Nascimento: </label><br>
                    <input type="date" name="datanasc" id="datanasc">
                </div>
                <div class="input-field col s12">
                    <label for="endereco">Endereco: </label><br>
                    <input type="text" name="endereco" id="endereco">
                </div>
                <div class="input-field col s12">
                    <label for="cidade">Cidade: </label><br>
                    <input type="text" name="cidade" id="cidade">
                </div>
                <div class="input-field col s12">
                    <label for="estado">Estado: </label><br>
                    <input type="text" name="estado" id="estado">
                </div>
                <div class="input-field col s12">
                    <label for="senha">Senha: </label><br>
                    <input type="text" name="senha" id="senha">
                </div>
                <button type="submit" class="btn" name="btncadastrar">Cadastrar</button>
                <a href="lista.php" class="btn green"> Listar clientes</a>            
            </form>

        </div>
    </div>
</body>