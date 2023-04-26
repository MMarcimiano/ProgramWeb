<?php
  include('../php/protect.php')
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../javascript/finalizar.js"></script>
  <link rel="stylesheet" href="../css/finalizar.css">
  <title>Document</title>
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