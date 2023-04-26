<?php

$mysqli = mysqli_connect("localhost:3306", "root", "", "usuarios");

if($mysqli->connect_errno){
    echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}
else{
    
}
?>