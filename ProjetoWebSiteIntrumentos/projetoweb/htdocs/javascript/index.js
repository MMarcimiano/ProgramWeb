

fetch("../php/listar.php", { 
    method: "GET" 
}).then(async function (resposta) {
    var objeto = await resposta.json();
    listarProdutos(objeto);
});


function addCarrinho(id, quant, i){
    var form = document.getElementById("formproduto" + i);
    var dados = new FormData(form);
    dados.append('var', id);
    dados.append('quant', quant);
    fetch("../php/inserirproduto.php", {
        method: "POST",
        body: dados
    });
}

function listarProdutos(produtos){
   
    for(var i = 0; i < produtos.length; i++)
    {
        var conteudo = '';

        conteudo += '<div class="card">'
        conteudo += '<div class="nome">' + produtos[i].nome_produto + '</div>'
        conteudo += '<div class="valor">R$' + produtos[i].valor + '</div>'
        conteudo += '<div class="imagem">' + produtos[i].imagem + '</div>'
        conteudo += '<form id="formproduto' + i + '">'
        conteudo += '<div class="info-compra">'
        conteudo += '<input type="number" name="quantidade'+produtos[i].idprodutos+'">' + '</input>'
        conteudo +='<input type="text" name="idproduto" class="idproduto" value="'+produtos[i].idprodutos+'">'  + '</input>'
        var id_atual = produtos[i].idprodutos;
        var quant_atual = 'quantidade' + produtos[i].idprodutos;
        conteudo += '</form>'
        conteudo += '<input type="submit" onclick="addCarrinho('+ id_atual +',' + "'" + quant_atual + "'" + "," + i +')" value="Adicionar ao Carrinho" class="botao-compra">' + '</input>' 
        conteudo += '</div>'
        conteudo += '</div>'

        document.getElementById("produtos").innerHTML += conteudo;
    }
}


