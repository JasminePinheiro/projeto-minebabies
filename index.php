<?php
if(isset($_POST['submit'])) /*confirmar se existe a variável submit*/
{
    include_once('config.php'); //incluindo a conexão do banco de dados

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
   

    //passando os dados do formulário para o banco de dados
    $result = mysqli_query($conexao, "INSERT INTO duvidas(nome,email,telefone,mensagem) 
    VALUES ('$nome','$email','$telefone','$mensagem')");
    
}    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>MineBabies</title>

    <!-- Link do Font Awesome: um conjunto de fontes e ícones baseados em CSS e Less. A ferramenta permite conectar rapidamente todos os tipos de ícones ao seu site. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Folha de estilo -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- Começo do Cabeçalho  -->

<header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>   <!-- Ícone de barrinhas -->

    <img src="imagens/logo.png"><a href="#" class="logo">MineBabies<span>&#x1F476</span></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#sobre">quem somos?</a>
        <a href="#produtos">produtos</a>
        <a href="#comentarios">comentários</a>
        <a href="#contato">contato</a>
        <a href="login.php">login</a>
        <a href="lista.php">listagem de clientes</a>
    </nav>

    <div class="icones">
        <a href="#" class="fas fa-heart"></a>           <!-- Ícone de coração -->
        <a href="#" class="fas fa-shopping-cart"></a>   <!-- Ícone de carrinho -->
        <a href="#" class="fas fa-user"></a>            <!-- Ícone de usuario -->
    </div>

</header>

<!-- Fim do Cabeçalho -->

<!-- Começo da seção  do home  -->

<section class="home" id="home">

    <div class="conteudo">
        <h1>BLACK FRIDAY</h1>
        <span>PRORROGADA</span>
        <p>Compre aqui o enxoval completo para o quarto do seu bebê, kit berço, kit cama babá, cortinas, saída de maternidade, roupinhas. Entrega para todo o Brasil.</p>
        <a href="#produtos" class="shop">aproveitar agora</a>
    </div>
    
</section>

<!-- Fim da seção  do home -->

<!-- Começo da seção do Sobre nós -->

<section class="sobre" id="sobre">

    <h1 class="titulo">  Quem <span> somos? </span></h1>

    <div class="row">

        <div class="video-container">
            <video src="imagens/baby.mp4" loop autoplay muted></video>
            <h3>NÃO PERCA NENHUMA PROMOÇÃO ❤️</h3>
        </div>

        <div class="conteudo">
            <h3>Por que comprar com a gente?</h3>
            <p>Somos a MineBabies! Marca referência em decoração e enxoval para quarto de bebê e infantil. Em apenas um mês, nos tornamos líderes do segmento, marca queridinha do Brasil, e parceiros oficiais do IFSP Guarulhos e Google.</p>
            <p>Atualmente, somos mais de 100 colaboradores em duas cidades de distribuição em São Paulo.</p>
            
        </div>

    </div>

</section>

<!-- Fim da seção do Sobre nós  -->

<!-- Começo da seção dos ícones -->

<section class="icones-container">

    <div class="icones">
        <img src="imagens/icone-1.PNG" alt="">
        <div class="info">
            <h3>Em até 12x</h3>
            <span>sem juros</span>
        </div>
    </div>

    <div class="icones">
        <img src="imagens/icone-2.png" alt="">
        <div class="info">
            <h3>chega rapidinho</h3>
            <span>envio em até 24hrs</span>
        </div>
    </div>

    <div class="icones">
        <img src="imagens/icone-3.png" alt="">
        <div class="info">
            <h3>5% de desconto</h3>
            <span>nas compras à vista</span>
        </div>
    </div>

    <div class="icones">
        <img src="imagens/icone-4.png" alt="">
        <div class="info">
            <h3>30 dias para a troca</h3>
            <span>ou 100% do seu dinheiro de volta!</span>
        </div>
    </div>
   
</section>

<!-- Fim da seção dos ícones -->

<!-- Começo da seção dos produtos  -->

<section class="produtos" id="produtos">

    <h1 class="titulo"> <span>oferta</span> do dia! <span>&#x1F4B5</span> </h1>

    <div class="box-container">

        <div class="box">
            <span class="desconto">-56%</span>
            <div class="imagens">
                <img src="imagens/img-1.png" alt="">
                <div class="icones">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">comprar</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="conteudo">
                <h3>Vestido de Bebê Manga Curta Ariele</h3>
                <div class="preco"> R$ 39,90 <span>R$ 89,90 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="desconto">-56%</span>
            <div class="imagens">
                <img src="imagens/img-2.png" alt="">
                <div class="icones">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">comprar</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="conteudo">
                <h3>Vestido de Bebê Manga Curta Unicórnio</h3>
                <div class="preco"> R$ 39,90 <span>R$ 89,90</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="desconto">-57%</span>
            <div class="imagens">
                <img src="imagens/img-3.png" alt="">
                <div class="icones">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">comprar</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="conteudo">
                <h3>Body Bebê Feminino Manga Curta Palha com Estampa Floral</h3>
                <div class="preco"> R$ 29,90 <span> R$ 69,90 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="desconto">-75%</span>
            <div class="imagens">
                <img src="imagens/img-4.png" alt="">
                <div class="icones">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">comprar</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="conteudo">
                <h3>Body Bebê Feminino Manga Curta Letícia Verde com Estampa Floral</h3>
                <div class="preco"> R$ 19,90 <span>R$ 79,90 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="desconto">-43%</span>
            <div class="imagens">
                <img src="imagens/img-5.png" alt="">
                <div class="icones">
                    <a href="#" class="fas fa-heart"></a>           <!--Ícone de coração -->
                    <a href="#" class="cart-btn">comprar</a>        <!--Ícone de adicionar ao carrinho -->
                    <a href="#" class="fas fa-share"></a>           <!--Ícone de compartilhamento -->
                </div>
            </div>
            <div class="conteudo">
                <h3>Saída Maternidade Realeza Luxo Branco 6 Peças</h3>
                <div class="preco"> R$ 79,90 <span>R$ 139,90</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="desconto">-61%</span>
            <div class="imagens">
                <img src="imagens/img-6.png" alt="">
                <div class="icones">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">comprar</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="conteudo">
                <h3>Conjunto Bebê Feminino Body Manga Curta com Colete e Shorts com Laço Dora</h3>
                <div class="preco"> R$ 34,90 <span> 89,90 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="desconto">-55%</span>
            <div class="imagens">
                <img src="imagens/img-7.png" alt="">
                <div class="icones">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">comprar</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="conteudo">
                <h3>Conjunto Bebê Masculino Colete e Macacão Manga Longa Realeza Vermelho e Azul Marinho</h3>
                <div class="preco"> R$ 49,90 <span> R$ 109,90 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="desconto">-44%</span>
            <div class="imagens">
                <img src="imagens/img-8.png" alt="">
                <div class="icones">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">comprar</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="conteudo">
                <h3>Capa Bebê Conforto Coroa Luxo Azul Marinho com Bordado de Coroa 100% Algodão</h3>
                <div class="preco"> R$ 44,90 <span> R$ 79,90 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="desconto">-7%</span>
            <div class="imagens">
                <img src="imagens/img-9.png" alt="">
                <div class="icones">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">comprar</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="conteudo">
                <h3>Bolsa Maternidade Puppi Palha M</h3>
                <div class="preco"> R$ 175,90 <span> R$ 189,90 </span> </div>
            </div>
        </div>

    </div>

</section>

<!-- Fim da seção dos produtos -->

<!-- Começo da seção dos comentarios -->

<section class="comentarios" id="comentarios">

<h1 class="titulo"> <span>comentários</span> dos nossos <span>clientes</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="estrelas">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>o prazo foi cumprido. Eu gostei bastante porque foi muito bem embalado, veio tudo certinho, nada com defeito, nada estragado, o material também eu achei muito bom, o tecido, tudo eu amei, foi do jeitinho que vi no site.</p>
        <div class="user">
            <img src="imagens/cliente-1.PNG" alt="">
            <div class="user-info">
                <h3>Marcia Pereira</h3>
                <span>cliente</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="estrelas">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Super indico! Ótimo atendimento, todos super educados, atenciosos, os produtos, além de bonitos, são de alta qualidade, preços acessíveis que cabem no seu bolso, e o mais importante, são de confiança, total credibilidade, estão de parabéns.❤️❤️</p>
        <div class="user">
            <img src="imagens/cliente-2.jpg" alt="">
            <div class="user-info">
                <h3>Joyce Pinheiro</h3>
                <span>cliente</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="estrelas">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Super recomendo, empresa séria, total credibilidade, responsabilidade, profissionais qualificados, educados e atenciosos. Os produtos além lindos são de excelente qualidade, tem preços acessíveis que cabem no seu bolso.</p>
        <div class="user">
            <img src="imagens/cliente-3.jpg" alt="">
            <div class="user-info">
                <h3>Laryssa Santos</h3>
                <span>cliente</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>
    
</section>

<!-- Fim da seção dos comentários -->

<!-- Começo da seção contato  -->

<section class="contato" id="contato">

    <h1 class="titulo">  Nossos <span> Contatos </span></h1>

    <div class="row">

        <form action="index.php" method="POST">
            <input type="text" name="nome" placeholder="Nome" class="box">
            <input type="text" name="email" placeholder="Email" class="box">
            <input type="tel" name="telefone" placeholder="Telefone" class="box">
            <textarea name="mensagem" class="box" placeholder="Mensagem" id="mensagem" cols="30" rows="10"></textarea>
            <input type="submit" name="submit" id="submit" class="botao">             
        </form>

        <div class="imagens">
            <img src="imagens/contato.jpg" alt="">
        </div>

    </div>

</section>

<!-- Fim da seção contato -->

<!-- Começo da seção footer  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Links Abaixo</h3>
            <a href="#home">home</a>
            <a href="#sobre">sobre</a>
            <a href="#produtos">produtos</a>
            <a href="#comentarios">comentários</a>
            <a href="#contato">contato</a>
        </div>

        <div class="box">
            <h3>Cadastro</h3>
            <a href="#">Minha conta</a>
            <h3>Certificados</h3>
            <img src="imagens/abring.gif" alt="">

        </div>

        <div class="box">
            <h3>Formas de Pagamento</h3>
            <img src="imagens/pagamento.PNG" alt="">
            <img src="imagens/cartoes.png" alt="">

        </div>

        <div class="box">
            <h3>contato</h3>
            <a href="#">(11) 4002-8922 </a>
            <a href="#">jasmine.pinheiro@aluno.ifsp.edu.br</a>
            <a href="#">São Paulo, Brasil</a>

        </div>

    </div>

    <div class="credito"> Criado por <span> Jasmine Pinheiro de Souza - GU302704X </span> | © Todos os direitos reservados </div>

</section>
<!-- Fim da seção footer  -->
</body>
</html>