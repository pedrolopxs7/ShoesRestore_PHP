create database CLP;

use CLP;

create table usuario ( 
 
 id_usuario int primary key not null auto_increment,
 nome varchar(150) not null,
email varchar(150) not null,
cpf int not null,
senha varchar(70)

);

create table cliente (

id_cliente int primary key auto_increment not null,
nome_cliente varchar(150) not null,
email varchar(150) not null,
cpf int not null,
senha varchar(70) not null


);

create table cargo (

cod_cargo int primary key not null auto_increment,
nome_cargo varchar(50) not null,
setor_cargo varchar(50) not null 

);

create table relatorios (

id_relatorios int primary key not null auto_increment,
 varchar(
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
	FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)


);