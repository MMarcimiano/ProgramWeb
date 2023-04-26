<?php

if(!isset($_SESSION)) {
  session_start();
}

if(!isset($_SESSION['nome'])) {
  die("Você não está logado <p><a href=\"../paginas/Login.php\">Entrar</a></p>");
}
?>