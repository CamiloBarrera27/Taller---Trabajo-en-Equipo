drop database if exists colombia;
create database colombia; 
use colombia;

create table departamento(

	id_departamento varchar (10) not null primary key,
	descripcion varchar(30) not null
);

create table municipio(

	id_municipio varchar(10) not null primary key,
	ref_departamento varchar(10) not null,
	descripcion varchar(30) not null,
	habitante int not null
);


alter table municipio add foreign key (ref_departamento)
	references departamento(id_departamento);
    
	 insert into departamento values ('dp01', 'BOYACA');	
	 insert into departamento values ('dp02', 'ANTIOQUIA');	
     insert into departamento values ('dp03', 'VALLE DEL CAUCA');
    
    insert into municipio values ('mc0101','dp01', 'SOGAMOSO', 130000);
	insert into municipio values ('mc0202','dp01', 'TUNJA', 140000);
	insert into municipio values ('mc0412','dp01', 'DUITAMA', 132000);
    
    insert into municipio values ('mc1447','dp03', 'SANTIAGO DE CALI', 2130000);
    insert into municipio values ('mc8717','dp03', 'CARTAGO', 130000);
    insert into municipio values ('mc9497','dp03', 'JAMUNDI', 114000);