<?php
    include('../php/protect.php')
?>

<html>
    <head>
        <script defer src="../javascript/index.js"></script>
        <link rel="stylesheet" href="../css/index.css">
        <meta charset="UTF-8">
    </head>

    <body>
        
        <header class="menu">
            <div class="logo">
                <a href="http://localhost/paginas/Principal.php"><img src="../menuimg/logo-branco.png" alt="" id="logo"></a>            </div>
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
                    <a href="http://localhost/paginas/finalizar.php"><img src="../menuimg/carrinho.jpg" alt=""></a>
                    </li>
            </ul>
        </div>
        </header>

        <div id="produtos">
    
        </div>
    </body>
</html>

