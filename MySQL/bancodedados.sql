use escola_tecnica;

create table Turma(
id char auto_increment primary key,
cod_disc varchar(100) not null,
cod_turma varchar(100) not null,
cod_prof varchar(100) not null,
ano int(100) not null,
horario decimal(100) not null,
foreign key(cod_disc) references Disciplinas(cod_disc),
foreign key(cod_prof) references Professores(cod_prof) 
);

create database sistema_de_chamados;

use sistema_de_chamados;

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
senha char(10),
cod_chamados int,
foreign key(cod_chamados) references chamados(cod_chamados)
);

insert into chamados(email,desc_problema,lugar,tipo_problema,tipo_user) values
('tiago santineli@gmail.com','o computador não liga', 'laboratorio de informatica 1', 'hardware', 'aluno');

select * from chamados;