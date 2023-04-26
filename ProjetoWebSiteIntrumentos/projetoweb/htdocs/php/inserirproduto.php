<?php


if(isset($_POST["var"])){
  $nome = $_POST["quant"];
  $quantidade = $_POST["$nome"];
  $idprodutos = $_POST["var"];
}

include "connect.php";
mysqli_query($mysqli, "INSERT INTO carrinho(idproduto, quantidade) VALUES ('$idprodutos', '$quantidade')");

?>