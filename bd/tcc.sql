CREATE DATABASE tcc;


create table tcc.Produtos(
    IdProduto int not null primary key auto_increment,
    NomeProd varchar(50) not null,
    QtndProd int not null,
    DataAtualProd date not null
);

create table tcc.Funcionario(
    IdFuncionario int not null primary key auto_increment,
    NomeFunc varchar(50) not null,
    CPFFunc varchar(14) not null,
    EmailFunc varchar(50) not null,
    SenhaFuncionario varchar(20) not null
);

create table tcc.Clientes(
    IdCliente int not null primary key auto_increment,
    NomeCli varchar(50) not null,
    CPFCli varchar(14) not null,
    EmailCli varchar(50) not null
);
CREATE TABLE `tcc`.`logins` (
    `idLogin` int NOT NULL AUTO_INCREMENT
    `login` VARCHAR(100) NOT NULL , 
    `senha` VARCHAR(30) NOT NULL , 
    PRIMARY KEY (`idLogin`), 
    UNIQUE (`senha`, 'login'));

adimin 12345

INSERT INTO Produtos 
VALUES(NULL, "Doril",100, "11/09/2022"),
(NULL, "Dipirona", 89, "11/09/2022"), 
(NULL, "Xarelto", 4, "06/09/2022"), 
(NULL, "Losartana", 50, "10/10/2022");

INSERT INTO Clientes 
VALUES(NULL, "Marcos da Silva",'100.200.300-33', "marcoo33@silva.com"),
(NULL, "Jonas Nascimento", '111.222.333-55', "jonas@nacimento.br"), 
(NULL, "Luan de Souza", '333.444.555-66', "luan@souza.gmail"), 
(NULL, "Laurentina de Carvalho", '666.222.333-55', "laura@tina.hot");


INSERT INTO Clientes 
VALUES(NULL, "Jose Mario de Oliveira Alves",'100.200.300-33', "marcoo33@silva.com"),