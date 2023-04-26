<?php

    include "connect.php";

    $query = "SELECT * FROM produtos";
    $registros = mysqli_query($mysqli, $query);

    $i = 0;
    
    while($resposta = mysqli_fetch_assoc($registros)){
        $dados[$i]["idprodutos"] = $resposta["idprodutos"];
        $dados[$i]["nome_produto"] = $resposta["nome_produto"];
        $dados[$i]["valor"] = $resposta["valor"];
        $dados[$i]["descricao"] = $resposta["descricao"];
        $dados[$i]["imagem"] = $resposta["imagem"];
        $i++;
    }

    $objetoJSON = json_encode($dados);
    echo $objetoJSON;

?>
