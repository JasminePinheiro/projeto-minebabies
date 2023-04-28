<?php
    include_once 'cabecalho.php';
    require_once 'conexao.php';

    $id=$_GET['id'];

    $consulta=$conecta->prepare('SELECT * FROM usuario WHERE id=:id');
    $consulta->bindValue(':id', $id);
    $consulta->execute();

    $linha=$consulta->fetch(PDO::FETCH_ASSOC);

?>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:url(../minebabies/imagens/homebb.jpg)no-repeat;
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }
    </style>
<div class="row">
        <div class="col s12 m6 push-m3">
            <h3> Alterando clientes</h3>
            <form action="action_altera_cliente.php" method="POST">

                    <input type="hidden" name="id" value="<?php echo "{$linha['id']}"; ?>">
            
                <div class="input-field col s12">
                    <label for="nome">Nome: </label><br>
                    <input type="text" name="nome" id="nome" value="<?php echo "{$linha['nome']}"; ?>">
                </div>
                <div class="input-field col s12">
                    <label for="email">Email: </label><br>
                    <input type="text" name="email" id="email" value="<?php echo "{$linha['email']}"; ?>">
                </div>
                <div class="input-field col s12">
                    <label for="telefone">Telefone: </label><br>
                    <input type="text" name="telefone" id="telefone" value="<?php echo "{$linha['telefone']}"; ?>">
                </div>
                <div class="input-field col s12">
                    <label for="sexo">Sexo: </label><br>
                    <input type="text" name="sexo" id="sexo" value="<?php echo "{$linha['sexo']}"; ?>">
                </div>
                <div class="input-field col s12">
                    <label for="datanasc">Data Nascimento: </label><br>
                    <input type="date" name="datanasc" id="datanasc" value="<?php echo "{$linha['data_nasc']}"; ?>">
                </div>
                <div class="input-field col s12">
                    <label for="endereco">Endereço: </label><br>
                    <input type="text" name="endereco" id="endereco" value="<?php echo "{$linha['endereco']}"; ?>">
                </div>
                <div class="input-field col s12">
                    <label for="cidade">Cidade: </label><br>
                    <input type="text" name="cidade" id="cidade" value="<?php echo "{$linha['cidade']}"; ?>">
                </div>
                <div class="input-field col s12">
                    <label for="estado">Estado: </label><br>
                    <input type="text" name="estado" id="estado" value="<?php echo "{$linha['estado']}"; ?>">
                </div>
                <div class="input-field col s12">
                    <label for="senha">Senha: </label><br>
                    <input type="text" name="senha" id="senha" value="<?php echo "{$linha['senha']}"; ?>">
                </div>                
                <button type="submit" class="btn" name="btnalterar">Alterar</button>
                <a href="lista.php" class="btn green"> Listar clientes</a>            
            </form>

        </div>
    </div>