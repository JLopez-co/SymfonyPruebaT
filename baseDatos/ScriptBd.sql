drop database symplifica;
create database symplifica;
use symplifica;

create table if not exists empleador(
	idEmpleador int auto_increment not null,
    nombreCompleto varchar(100) not null,
    sexo char not null,
	documentoIdentidad int not null,
    telefono int not null,
    dirrecion varchar(60) not null,
    fechaNacimiento date not null,
    primary key(idEmpleador)
);

create table if not exists tipoContrato(
	idTipoContrato int auto_increment not null,
    nombreContrato varchar (30)not null,
    descripcionContrato varchar(200) not null,
    primary key(idTipoContrato)
);

create table  if not exists empleado (
	idEmpleado int auto_increment not null,
    nombreCompleto varchar (100) not null,
    sexo char not null,
    documentoIdentidad int not null,
    telefono int not null,
    dirrecion varchar(60)not null,
    fechaNacimiento date not null,
    fkTipoContrato int not null,
    fkEmpleador int not null,
    index fkTipoContrato(fkTipoContrato asc),
		constraint fkTipoContrato
		foreign key (fkTipoContrato)
        references tipoContrato(idTipoContrato),
    index fkEmpleador(fkEmpleador asc),
		constraint fkEmpleador
        foreign key (fkEmpleador)
        references empleador(idEmpleador),
	primary key(idEmpleado)
);

insert into tipoContrato values(0,'Término indefinido','Es aquel tipo de contrato en donde se pacta la fecha de inicio de labores, pero no se manifiesta la fecha en la cual se terminara dicho contrato');
insert into tipoContrato values(0,'Tiempo parcial','El contrato de trabajo se entiende celebrado a tiempo parcial cuando se haya acordado la pestación de servicios durante un número de horas al día, a la semana, al meso al año.');
select * from tipoContrato;