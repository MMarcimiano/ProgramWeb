fetch("../php/finalizacaodacompra.php", { 
  method: "GET" 
}).then(async function (resposta) {
  var objeto = await resposta.json();
  listarProdutos(objeto);
});

function listarProdutos(produtos){
   
  for(var i = 0; i < produtos.length; i++)
  {
      var conteudo = '';

      conteudo += '<div class="card">'
      conteudo += '<div class="nome">' + produtos[i].nome_produto + '</div>'
      conteudo += '<div class="total"> <h1>' + 'Valor total: R$' + produtos[i].valor + '</div>'
      conteudo += '<div class="quantidade"> <h1>'+ 'Quantidade: ' + produtos[i].soma + '</div>'
      conteudo += '<div class="imagem">' + produtos[i].imagem + '</div>'
      conteudo += '</div>'
      document.getElementById("produtos").innerHTML += conteudo;
  }
}