<?php
if(isset($_POST['submit'])) /*confirmar se existe a variável submit*/
{
    /*print_r($_POST['nome']);
    print_r($_POST['email']);
    print_r($_POST['telefone']);
    print_r($_POST['genero']);
    print_r($_POST['data_nascimento']);
    print_r($_POST['endereco']);
    print_r($_POST['cidade']);
    print_r($_POST['estado']);
     /*******TESTE DE CONEXÃO*******/

    include_once('config.php'); //incluindo a conexão do banco de dados

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $senha = $_POST['senha'];

    //passando os dados do formulário para o banco de dados
    $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,telefone,sexo,data_nasc,endereco,cidade,estado,senha) 
    VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$endereco','$cidade', '$estado', '$senha')");
    
}    
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Formulário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:url(../minebabies/imagens/homebb.jpg)no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            min-height: 100vh;
            width: 100px;
        }

        .box{
            color: rgb(0, 0, 0);
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.85);
            padding: 25px;
            border-radius: 15px;
            width: 30%;
        }

        fieldset{
            border: 3px solid rgba(201, 81, 238, 0.603);
        }

        legend{
            border: 3px solid rgba(201, 81, 238, 0.603);
            padding: 10px;
            text-align: center;
            background-color:rgba(201, 81, 238, 0.603);
            border-radius: 7px;
            color: rgb(0, 0, 0);
        }

        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid rgb(0, 0, 0);
            outline: none;
            color: rgb(0, 0, 0);
            width: 100%;
            font-size: 15px;
            letter-spacing: 2px;
        }

        .efeito{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;   /*qualquer lugar que eu clicar na caixinha, irá surgir a animação*/
            transition: .3s;
        }

        .inputUser:focus ~ .efeito,  /*a pseudo-classe :focus que executa o efeito, assim quando clicamos em cima do input*/
        .inputUser:valid ~ .efeito{  /*quando o campo estiver válido ele também vai executar essa ação*/
            top: -20px;             /*o texto do input irá subir 20px*/
            font-size: 12px;
            color: rgba(201, 81, 238, 0.603);
        }

        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            background-color: rgba(124, 122, 122, 0.514);
            font-size: 13px;
        }

        #submit{
            background-image: linear-gradient(45deg, rgba(201, 81, 238, 0.603),  rgba(201, 81, 238, 0.603));
            border-radius: 8px;
            border: none;
            outline: none;
            width: 100%;
            text-align: center;
            padding: 8px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;      
        }

        #submit:hover{
            background-image: linear-gradient(45deg, rgb(250, 112, 255), rgb(84, 232, 243));
        }

        button {
        background-image: linear-gradient(45deg, rgba(123,104,238, 0.5),  rgba(175,238,238));
        border-radius: 7px;
        border: none;
        padding: 5px;
        width: 10%;
        color: rgb(0, 0, 0);
        font-weight: bold;
        font-size: 15px;
        position:absolute;
        top: 90%;
        left: 45%;
    }

        button:hover {
        background-image: linear-gradient(45deg, rgba(135,206,250, 0.5),  rgba(175,238,238));
        color:white;
        cursor: pointer;
    }
        a{
        text-decoration: none; 
    }

    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>CADASTRO</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="efeito">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="efeito">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="efeito">Telefone</label>
                </div>
                <p>Sexo:</p>
                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="genero" id="outro" value="outro" required>
                    <label for="outro">Outro</label>
                    <br><br>
                    <label for="data_nascimento">Data de nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for="endereco" class="efeito">Endereço</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="efeito">Cidade</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for="estado" class="efeito">Estado</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="efeito"> Senha </label>
                    </div>
                    <br>
                    <input type="submit" name="submit" id="submit" class="botao">             
            </fieldset>
        </form>
    </div>
    <a href="index.php"><button>HOME</button></a>
</body>
</html>