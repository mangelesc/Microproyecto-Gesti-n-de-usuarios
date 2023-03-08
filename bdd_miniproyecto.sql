create database if not exists miniproyecto;
create user if not exists miniproyecto;
use miniproyecto;

create table usuario(
	id_usuario int auto_increment primary key,
    nombre varchar(255) not null,
    email varchar(255) unique not null,
    pass varchar(255) not null,
    tipo_usuario int not null
);
    
insert into usuario(nombre, email, pass, tipo_usuario) values('admin1', 'adm1@adm.com', '1234', 0);
insert into usuario(nombre, email, pass, tipo_usuario) values('admin2', 'adm2@adm.com', '1234', 0);
insert into usuario(nombre, email, pass, tipo_usuario) values('user1', 'usuario@usuario.com', '1234', 1);
insert into usuario(nombre, email, pass, tipo_usuario) values('user2', 'user2@user.com', '1234', 1);

select * from usuario;

