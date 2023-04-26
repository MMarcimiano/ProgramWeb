<?php
include('php/connect.php');
if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
        echo "<div class=\"loginerror\">Preencha seu e-mail</div>";
    } 
    else if(strlen($_POST['senha']) == 0){
        echo "<div class=\"loginerror\">Preencha sua senha</div>";
    }
    else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha ='$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);


        $quantidade = $sql_query->num_rows;
        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['idusuario'] = $usuario['idusuario'];

            header("location: paginas/Principal.php");
        }
        else{
            echo"<div class=\"loginerror\">Falha ao logar! Email ou senha incorretos</div>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <div class="login">
    <H1>Acesse sua conta Madrigal</H1>
    <img src="menuimg/logo.png" alt="">
    <form action="" method="POST"> 
        <p>
            <input type="text" name="email" class="input" placeholder="Digite seu Email">
        </p>
        <p>
            <input type="Password" name="senha" class="input" placeholder="Digite sua senha">
        </p>
        <div class="botao-div">
        <button type="submit" class="botao">Entrar</button>
        <button type="submit" class="botao"> <a href="cadastro.html"> Cadastrar</a></button>
        </div>
    </form>
    </div>
</body>
</html>