Create database toht;

create table Cadastro (
    ID_Usuario int not null auto_increment,
    Nome varchar(60) not null,
    UserName varchar(20) not null,
    Email varchar (50) not null,
    DataNasc date,
    Senha varchar(30) not null,
primary key(ID_Usuario)
)default charset utf8;

create table Rotina (
    ID_Rotina int not null auto_increment,
    NomeRotina varchar(50) not null,
    DescricaoRotina varchar(255) not null,
    DataRotina datetime,
    StatusRotina varchar (20) not null,
    primary key(ID_Rotina)
)default charset utf8;