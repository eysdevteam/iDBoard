create database eys;
use eys;

-- Crear tablas

create table servidores(
	Id int auto_increment,
    servidor varchar(100) not null,
    primary key(Id)
);

create table servicios(
	Id int auto_increment,
    servicio varchar(100) not null,
    primary key(Id)
);

create table servidor_servicio(
	Id int auto_increment,
    Id_servidores int references servidores(Id),
    Id_servicios int references servicios(Id),
    Valor double not null,
    Tiempo timestamp not null,
    primary key(Id)
);

create table usuarios(
    Id int auto_increment,
    Nombre varchar(100) not null,
    Usuario varchar(100) not null, 
    Pass varchar(256) not null,
    Estado int default 0,
    Privilegio varchar(50) not null,
    primary key(Id),
    UNIQUE (Id)
);

create table usuario_servidor(
    Id int auto_increment,
    Id_servidores int references servidores(Id),
    Id_servicios int references servicios(Id),
    primary key(Id)
);

-- Procedimientos almacenados
    -- Usuarios (users)
    create procedure registrar(_Usuario varchar(100), _Pass varchar(256), _Privilegio varchar(50))
    insert into user(Usuario, Pass, Privilegio) values(_Usuario, _Pass, _Privilegio);

    -- call registrar('nagiosadmin', 'nagiosadmin', 'admin');

    --  Login
    create procedure sp_login(_Usuario varchar(100), _Pass varchar(250))        
    select * from usuarios where Usuario = _Usuario && Pass = _Pass;
    -- call sp_login('Cristhian', '1234'),