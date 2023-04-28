<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>login</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, rgb(250, 112, 255), rgb(84, 232, 243));   
    }

    div{
        background-color: rgba(255, 255, 255, 0.9);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 60px;
        padding-top: 40px;
        padding-bottom: 10px;
        border-radius: 15px;
        color: rgb(0, 0, 0);
        width:250px;
    }

    input{
        padding: 15px;
        border: none;
        outline: none;
        border-radius: 7px;
        color: rgb(0, 0, 0);
        width: 100%;
        font-size: 15px;
        background-color: rgb(189, 189, 189);
        position:relative;
        top: 100%;
        left: -5%;
    }

    .botao{
    background-image: linear-gradient(45deg, rgba(201, 81, 238, 0.603),  rgba(201, 81, 238, 0.603));
    border-radius: 8px;
    border: none;
    outline: none;
    width: 110%;
    text-align: center;
    padding: 8px;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;      
    }

    .botao:hover{
    background-image: linear-gradient(45deg, rgb(250, 112, 255), rgb(84, 232, 243));
}
   



</style>
<body>

    <div>
        <h1>Login</h1>
    <form action="testeLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input type="submit" name="submit" name="submit"  value="Enviar" class="botao">   
            <br><br><br>

             <p>Novo por aqui? <a href="formulario.php">Cadastre-se.</a></p> 
    </form>
    </div>

</body>
</html>