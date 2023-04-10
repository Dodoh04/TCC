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