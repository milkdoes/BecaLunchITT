drop database if exists ordenes;
create database ordenes;
use ordenes;

create table platillo(
    id_platillo int auto_increment primary key,
    nombre varchar(50),
    descripcion varchar(50),
    estatus varchar(50),
    precio decimal
);

INSERT INTO `platillo` (`id_platillo`, `nombre`, `descripcion`, `estatus`, `precio`) VALUES
(1, 'enchiladas', 'ricas enchiladas', 'disponible', '13'),
(2, 'salchicha mexicana', 'ricas salchicas', 'disponible', '13'),
(3, 'mole', 'rico mole', 'disponible', '13'),
(4, 'pozole', 'rico pozole', 'no disponible', '10'),
(5, 'hamburguesas', 'ricas hamburguesas', 'disponible', '14'),
(6, 'hotdogs', 'ricos hotdogs', 'no disponible', '20'),
(7, 'frutas', 'fruta afresca', 'disponible', '13'),
(8, 'spaghetti', 'spaghetti con carne', 'disponible', '20'),
(9, 'guacamole', 'rico guacamole', 'no disponible', '15');

create table alumno(
    id_becado int AUTO_INCREMENT PRIMARY KEY,
    no_control int,
    nombre varchar(50),
    apellidop char(50),
    apellidom char(50),
    semestre int,
    periodo varchar(50),
    contador int,
    contrasena varchar(50)
);

create table ordenes(
    id_orden int,
    id_becado int,
    fecha date,
    id_platillo int,
    estatus varchar(50),
    primary key (id_orden),
    FOREIGN KEY (id_becado) REFERENCES alumno(id_becado),
    FOREIGN KEY (id_platillo) REFERENCES platillo(id_platillo)
);

create table Admincafeteria(
    id_AdministradorC int,
    nombre varchar(50),
    apellidoP varchar(50),
    apellidoM varchar(50),
    contrasena varchar(50),
    primary key (id_AdministradorC)
);

create table AdminEscuela(
    id_AdministradorEsc int,
    nombre varchar(50),
    apellidoP varchar(50),
    apellidoM varchar(50),
    contrasena varchar(50),
    primary key (id_AdministradorEsc)
);

create table Bitacora(
    id_Bitacora varchar(2),
    fecha date,
    id_becado int,
    estatus varchar(50),
    primary key (id_Bitacora),
    FOREIGN KEY (id_becado) REFERENCES ordenes(id_becado)
);

create table CorreoA(
    id_becado int,
    correo varchar(50),
    FOREIGN KEY (id_becado) REFERENCES alumno(id_becado)
);

create table TelefonoC(
    id_AdministradorC int,
    telefono varchar(50),
    FOREIGN KEY (id_AdministradorC) REFERENCES Admincafeteria(id_AdministradorC)
);

create table CorreoC(
    id_AdministradorC int,
    correo varchar(50),
    FOREIGN KEY (id_AdministradorC) REFERENCES Admincafeteria(id_AdministradorC)
);

create table TelefonoE
(
    id_AdministradorEsc int,
    telefono varchar(50),
    FOREIGN KEY (id_AdministradorEsc) REFERENCES AdminEscuela(id_AdministradorEsc)
);
create table imagen(
    id_imagen varchar(50),
    tipo varchar(50),
    ruta varchar(50)
);
