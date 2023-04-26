<?php

    include "connect.php";

    $query = "SELECT DISTINCT carrinho.idproduto, sum(carrinho.quantidade) AS soma, produtos.nome_produto, (produtos.valor * sum(carrinho.quantidade)) as valor, produtos.imagem
    FROM produtos
    INNER JOIN carrinho ON carrinho.idproduto = produtos.idprodutos
    GROUP BY idproduto";
    $registros = mysqli_query($mysqli, $query);

    $i = 0;
    
    while($resposta = mysqli_fetch_assoc($registros)){
        $dados[$i]["idproduto"] = $resposta["idproduto"];
        $dados[$i]["nome_produto"] = $resposta["nome_produto"];
        $dados[$i]["valor"] = $resposta["valor"];
        $dados[$i]["soma"] = $resposta["soma"];
        $dados[$i]["imagem"] = $resposta["imagem"];
        $i++;
    }

    $objetoJSON = json_encode($dados);
    echo $objetoJSON;

?>
