-- Author:  José A. Rodríguez López
-- Created: 9 feb 2023

drop database if exists administracion;

create database administracion default character set utf8mb4 collate utf8mb4_unicode_ci;;

use administracion;

-- Creación de la tabla usuarios.
create table usuarios(
    usuario varchar(20) primary key,
    pass varchar(64) not null
);

-- Creación de usuarios de prueba.
insert into usuarios select 'administrador' , sha2('secreto1',256);
insert into usuarios select 'gestor' , sha2('secreto2',256);
insert into usuarios select 'María' , sha2('1234',256);