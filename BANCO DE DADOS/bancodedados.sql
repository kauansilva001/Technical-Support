CREATE DATABASE sistema_de_chamados;

USE sistema_de_chamados;

SHOW TABLES;

create table chamados(
cod_chamados int auto_increment primary key,
email varchar(50),
desc_problema varchar (500),
lugar varchar (50),
tipo_problema varchar (40),
tipo_user varchar (40),
data_hora datetime default current_timestamp
);

create table administrador(
cod_admin int auto_increment primary key,
user_name varchar(100),
senha char(12));

insert into administrador (user_name, senha) values
('admin', 'admin');

select * from administrador;