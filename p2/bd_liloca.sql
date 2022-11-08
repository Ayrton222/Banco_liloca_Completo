CREATE DATABASE bd_liloca;

use bd_liloca;

CREATE TABLE Bebida (
  idBebida INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Produto_idProduto INTEGER UNSIGNED NOT NULL,
  medida INTEGER UNSIGNED NULL,
  marca VARCHAR(45) NULL,
  sabor VARCHAR(45) NULL,
  quantidade INTEGER UNSIGNED NULL,
  PRIMARY KEY(idBebida, Produto_idProduto),
  INDEX Bebida_FKIndex1(Produto_idProduto)
);

CREATE TABLE Cliente (
  idCliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(200) NULL,
  telefone VARCHAR(20) NULL,
  endereco VARCHAR(200) NULL,
  cpf INT(12) NULL,
  PRIMARY KEY(idCliente)
);

CREATE TABLE Comida (
  idComida INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Produto_idProduto INTEGER UNSIGNED NOT NULL,
  medicao INT NULL,
  tipo VARCHAR(45) NULL,
  PRIMARY KEY(idComida, Produto_idProduto),
  INDEX Comida_FKIndex1(Produto_idProduto)
);

CREATE TABLE Decoracao (
  idDecoracao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Produto_idProduto INTEGER UNSIGNED NOT NULL,
  tamanho INTEGER UNSIGNED NULL,
  modelo VARCHAR(45) NULL,
  PRIMARY KEY(idDecoracao, Produto_idProduto),
  INDEX Decoracao_FKIndex1(Produto_idProduto)
);

CREATE TABLE Festa (
  idFesta INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Pedido_idPedido INTEGER UNSIGNED NOT NULL,
  Cliente_idCliente INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(200) NULL,
  idade INTEGER UNSIGNED NULL,
  endereco VARCHAR(200) NULL,
  tema VARCHAR(200) NULL,
  cores VARCHAR(200) NULL,
  PRIMARY KEY(idFesta),
  INDEX Festa_FKIndex1(Cliente_idCliente),
  INDEX Festa_FKIndex2(Pedido_idPedido)
);

CREATE TABLE Itens (
  Pedido_idPedido INTEGER UNSIGNED NOT NULL,
  Produto_idProduto INTEGER UNSIGNED NOT NULL,
  valor INTEGER UNSIGNED NULL,
  quantidade FLOAT NULL,
  PRIMARY KEY(Pedido_idPedido, Produto_idProduto),
  INDEX Pedido_has_Produto_FKIndex1(Pedido_idPedido),
  INDEX Pedido_has_Produto_FKIndex2(Produto_idProduto)
);

CREATE TABLE Pedido (
  idPedido INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  data_pedido DATE NULL,
  data_festa DATE NULL,
  prazo DATE NULL,
  data_entrega DATE NULL,
  tipo_entrega VARCHAR(200) NULL,
  frete DOUBLE NULL,
  sinal DOUBLE NULL,
  restante DOUBLE NULL,
  PRIMARY KEY(idPedido)
);

CREATE TABLE Produto (
  idProduto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(200) NULL,
  valor_unit DOUBLE NULL,
  PRIMARY KEY(idProduto)
);


