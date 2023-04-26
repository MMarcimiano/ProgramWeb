CREATE TABLE produtos(
idprodutos int auto_increment NOT NULL primary key,
nome_produto varchar(45) NOT NULL,
valor int(11) NOT NULL,
descricao varchar(100) NOT NULL,
imagem varchar(200) NOT NULL
);

CREATE TABLE carrinho (
idproduto int auto_increment NOT NULL,
quantidade int NOT NULL,
foreign key (idproduto) references produtos(idprodutos));

CREATE TABLE users(
idusuario int auto_increment NOT NULL primary key,
nome varchar(45) NOT NULL,
cpf varchar(11) NOT NULL,
email varchar(200) NOT NULL,
senha varchar(16) NOT NULL);

INSERT INTO produtos (nome_produto, valor, descricao, imagem) VALUES ('Violino Stentor', 2390, 'Violino Stentor 4/4, feito a mão de madeiras de abeto', '<img src="../imagens/imagens_produtos/Violino.jpg" alt="">');
INSERT INTO produtos (nome_produto, valor, descricao, imagem) VALUES ('Violoncelo Eagle', 7190, 'Violoncelo Eagle 4/4, CE300 profissional', '<img src="../imagens/imagens_produtos/Violoncelo.jpg" alt="">');
INSERT INTO produtos (nome_produto, valor, descricao, imagem) VALUES ('Saxofone Yamaha', 12099, 'Saxofone YAMAHA alto EB laqueado dourado', '<img src="../imagens/imagens_produtos/Sax.jpg" alt="">');
INSERT INTO produtos (nome_produto, valor, descricao, imagem) VALUES ('Guitarra Fender', 11050, 'Player Stratocaster® Floyd White', '<img src="../imagens/imagens_produtos/guitarrastratocaster.jpg" alt="">');

