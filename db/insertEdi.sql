insert into usuario (usuario,password,nombre,apellido,telefono,email,direccion) values 
('adminis','admin1234','facundo','devalle','02374660052','cfdevalle@gmail.com','A.bello 2176'),
('nicolas21','123456','Nicolas','Callejas','02374552345','nickCallejas@hotmail.com','bolivia234'),
('fernandez223','123456','Soledad','Fernandez','02374660052','soleLove@gmail.com','sofocles344'),
('sebasOtto','123456','Sebastian','Otto','02374556678','sebasOtto@gmail.com','watt223');


insert into rol (rol,descripcion,alta) values('admin','administrador del programa',0);

insert into rol (rol,descripcion,alta) values('sec','parsonal de atencion en la recepcion',0);

insert into rol (rol,descripcion,alta) values('clinico','doctor',0);
insert into rol (rol,descripcion,alta) values('oftalmologo','doctor',0);
insert into rol (rol,descripcion,alta) values('cirujano','doctor',0);
insert into rol (rol,descripcion,alta) values('psicologo','doctor',1);


insert into usuario_rol (rol,usuario) values 
('admin','adminis').
('sec','fernandez223'),
('clinico','nicolas21'),
('psicologo','sebasOtto');