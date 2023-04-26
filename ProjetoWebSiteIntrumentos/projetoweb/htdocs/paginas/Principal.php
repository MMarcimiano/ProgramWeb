<?php 

include('../php/protect.php')

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/PrincipalStyle.css">
    
    <script src="../javascript/scriptCatalogo.js"></script>
    <title>Madrigal</title>

</head>
<body>
    <header class="menu">
        <div class="logo">
            <a href="http://localhost/paginas/Principal.php"><img src="../menuimg/logo-branco.png" alt="" id="logo"></a>
        </div>
        <div class="mensagem-site">
            <h1>Bem vindo, <?php echo $_SESSION['nome'];?></h1>
        </div>
        <div class="login">
            <ul>
                <li>
                    <a href="../php/logout.php">Sair</a>
                </li>
                <li>
                    <a href="" class="button-style">Sobre nós</a>
                </li>
                <li class="carrinho">
                    <a href=""><img src="../menuimg/carrinho.jpg" alt=""></a>
                </li>
        </ul>
    </div>
    </header>

    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">

            <!--Slides-->
            <div class="slide first">
                <img src="../imagens/Guitarra.png" alt="Guitarra Fender">
            </div>
            <div class="slide">
                <img src="../imagens/piano.png" alt="Piano">
            </div>
            <div class="slide">
                <img src="../imagens/mixer.png" alt="Mixer">
            </div>

            <div class="auto-nav">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>
            <div class="manual-nav">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>
        </div>
        
    </div>
    <a href="http://localhost/paginas/index.php">
        <div class="catalogo">
            <div id="produtos">
                
            </div>
        </div>
    </a>
    <div id="mensagem-da-empresa">
        <details>
            <h1>Sobre Nós</h1>
            <p style="text-align: justify; ">Madrigal Co. fundada em 2021 por seu idealizador e acionista majoritário Guilherme Henrique e seu co-sócio Mateus Henrique 
                Corresponde a um novo conceito de marketplace de artigos musicais com uma experiência de compra jamais vista digitalmente
                antes. Entregando uma experiência sem igual aos clientes com o objetivo de lhe proporcionar uma compra segura e eficiente,
                baseado no zelo ao produto e entrega e garantir a melhor experiência de compra possível
        </details>
        </p>
    </div>
    <div class="social">
        <div class="socialmedia">
            <div class="social-media-icon">
                <img src="../imagens/socialmedia/instagram.webp" alt="">
            </div>
            <div class="social-media-name">
                <h3>Instagram</h3>
            </div>
        </div>
        <div class="socialmedia">
            <div class="social-media-icon">
                <img src="../imagens/socialmedia/twitter.png" alt="">
            </div>
            <div class="social-media-name">
                <h3>twitter</h3>
            </div>
        </div>
    </div>
    <script src="../javascript/Script_pagina_principal.js" defer></script>
</body>
</html>