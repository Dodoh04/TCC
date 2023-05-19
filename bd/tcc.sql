
create database Tcc;


CREATE TABLE IF NOT EXISTS `Tcc`.`produtos` (
  `IdProduto` int NOT NULL AUTO_INCREMENT,
  `NomeProd` varchar(50) NOT NULL,
  `QtndProd` int NOT NULL,
  `DataAtualProd` date NOT NULL,
  PRIMARY KEY (`IdProduto`)
);


INSERT INTO `tcc`.`produtos` (`IdProduto`, `NomeProd`, `QtndProd`, `DataAtualProd`) VALUES
(3, 'Pomadinha', 32, '2023-05-19'),
(4, 'Ibuprofeno', 100, '2023-05-12'),
(5, 'Losartana', 90, '2023-05-03');


CREATE TABLE IF NOT EXISTS `Tcc`.`usuario` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(20) NOT NULL,
  `nivelAcess` varchar(15) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE KEY `senha` (`senha`)
);

INSERT INTO `tcc`.`usuario` (`cpf`, `nome`, `sobrenome`, `nivelAcess`, `sexo`, `email`, `senha`) VALUES
('11111111111', 'Douglas', 'Oliveira', 'Administrador', 'Masculino', 'douglasAdm@test.com', 'adm'),
('22222222222', 'Cliente', 'Teste', 'Cliente', 'Feminino', 'testCliente@.com', 'cliente');
COMMIT;


