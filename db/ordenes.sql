CREATE DATABASE BecaLunch;
GO

USE BecaLunch;
GO

create table platillo
(
    id_platillo int,
    nombre varchar(50),
    descripcion varchar(50),
    estatus bit,
    primary key (id_platillo)
);
GO

create table alumno
(
    id_becado int,
    no_control int,
    nombre varchar(50),
    apellidop char(50),
    apellidom char(50),
    estatus bit,
    semestre int,
    periodo varchar(50),
    contador int,
    contrasena varchar(50),
    primary key (id_becado)
);
GO

create table ordenes
(
    id_orden int,
    id_becado int,
    fecha date,
    id_platillo int,
    estatus varchar(50),
    primary key (id_orden),
    FOREIGN KEY (id_becado) REFERENCES alumno(id_becado),
    FOREIGN KEY (id_platillo) REFERENCES platillo(id_platillo)
);
GO

create table Admincafeteria
(
    id_AdministradorC int,
    nombre varchar(50),
    apellidoP varchar(50),
    apellidoM varchar(50),
    contrasena varchar(50),
    primary key (id_AdministradorC)
);
GO

create table AdminEscuela
(
    id_AdministradorEsc int,
    nombre varchar(50),
    apellidoP varchar(50),
    apellidoM varchar(50),
    contrasena varchar(50),
    primary key (id_AdministradorEsc)
);
GO

create table Bitacora
(
    id_Bitacora varchar(2),
    fecha date,
    id_becado int,
    estatus bit,
    primary key (id_Bitacora),
    FOREIGN KEY (id_becado) REFERENCES alumno(id_becado)
);
GO

create table CorreoA
(
    id_becado int,
    correo varchar(50),
    FOREIGN KEY (id_becado) REFERENCES alumno(id_becado)

);
GO

create table TelefonoC
(
    id_AdministradorC int,
    telefono varchar(50),
    FOREIGN KEY (id_AdministradorC) REFERENCES Admincafeteria(id_AdministradorC)
);
GO

create table CorreoC
(
    id_AdministradorC int,
    correo varchar(50),
    FOREIGN KEY (id_AdministradorC) REFERENCES Admincafeteria(id_AdministradorC)
);
GO

create table TelefonoE
(
    id_AdministradorEsc int,
    telefono varchar(50),
    FOREIGN KEY (id_AdministradorEsc) REFERENCES AdminEscuela(id_AdministradorEsc)

);
GO

create table imagen(
    id_imagen int,
    tipo varchar(50),
    ruta varchar(50),
    PRIMARY KEY (id_imagen)
);
GO
