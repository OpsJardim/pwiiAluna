drop database etimpwiialuno;
create database EtimPwiiAluno;
use EtimPwiiAluno;

create table aluno(
    id int primary key auto_increment,
    rm int,
    nome varchar (100),
    email varchar (150),
    senha varchar(32),
    cpf varchar (14)
);