<?php

if(isset($_POST["nome"]))


$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$senha = $_POST["senha"];

include "connect.php";
mysqli_query($mysqli, "INSERT INTO users(nome, cpf, email, senha) VALUES ('$nome', '$cpf', '$email', '$senha')");


