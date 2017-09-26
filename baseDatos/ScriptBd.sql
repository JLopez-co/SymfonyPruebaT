drop database if exists symplifica;
create database symplifica;
use symplifica;

create table if not exists empleador(
	id int auto_increment not null,
    nombre_completo varchar(100) not null,
    sexo char not null,
	documento_identidad int not null ,
    telefono int not null,
    dirrecion varchar(60) not null,
    fecha_nacimiento varchar(60) not null,
    primary key(id)
);

create table if not exists tipo_contrato(
	id int auto_increment not null,
    nombre_contrato varchar (30)not null,
    descripcion_contrato varchar(200) not null,
    primary key(id)
);

create table  if not exists empleado (
	id int auto_increment not null,
    nombre_completo varchar (100) not null,
    sexo char not null,
    documento_identidad int not null ,
    telefono int not null,
    fk_tipo_contrato int not null,
    fk_empleador int not null,
    index fk_tipo_contrato(fk_tipo_contrato asc),
		constraint fk_tipo_contrato 
		foreign key (fk_tipo_contrato)
        references tipo_contrato(id),
    index fk_empleador(fk_empleador asc),
		constraint fk_empleador 
        foreign key (fk_empleador)
        references empleador(id),
	primary key(id)
);

insert into tipo_contrato values(0,'Término indefinido','Es aquel tipo de contrato en donde se pacta la fecha de inicio de labores, pero no se manifiesta la fecha en la cual se terminara dicho contrato');
insert into tipo_contrato values(0,'Termino definido','El contrato a término fijo, como su nombre lo indica, tiene una duración determinada, limitada.');
insert into tipo_contrato values(0,'Tiempo parcial','El contrato de trabajo se entiende celebrado a tiempo parcial cuando se haya acordado la pestación de servicios durante un número de horas al día, a la semana, al meso al año.');
select * from empleado;
