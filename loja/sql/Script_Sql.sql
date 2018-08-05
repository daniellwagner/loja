CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;



INSERT INTO loja.produtos
(id, nome, preco)
VALUES(1, 'carro', 20000.00);
INSERT INTO loja.produtos
(id, nome, preco)
VALUES(2, 'motocicleta', 10000.00);
INSERT INTO loja.produtos
(id, nome, preco)
VALUES(3, 'bicicleta', 300.00);
INSERT INTO loja.produtos
(id, nome, preco)
VALUES(4, 'lapis', 1.00);



