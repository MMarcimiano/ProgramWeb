var produtos = [
    {
        "imagem": '<img src="../imagens/imagens_produtos/guitarrastratocaster.jpg">',
        "nome": 'Guitarra Fender Stratoscaster',
        "preco": 'R$1.799,90'
    },
    {
        "imagem": '<img src="../imagens/imagens_produtos/mixer.jpg">',
        "nome": 'Console de Mixagem Behringer',
        "preco": 'R$70.000,00'
    },
    {
        "imagem": '<img src="../imagens/imagens_produtos/Piano_Steinway.jpg">',
        "nome": 'Piano Steinway',
        "preco": 'R$100.000,00'
    }
];

for(var i = 0; i < produtos.length; ++i){
    var conteudo = "";
    conteudo += '<div class ="card">' 
    conteudo += '<div class ="imagem">' + produtos[i].imagem + "</div>"
    conteudo += '<div class="content">'
    conteudo += '<div class ="nome">' +  produtos[i].nome + '</div>'
    conteudo += '<div class="preco">' + produtos[i].preco + '</div>'
    conteudo += '<div class="more-info">' + 'Saiba Mais'  + '</div>'
    conteudo += '</div>'
    conteudo += '</div>'
    document.getElementById("produtos").innerHTML += conteudo;
}

console.log(produtos);