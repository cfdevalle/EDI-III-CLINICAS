DELETE FROM turno;
DELETE FROM paciente;
DELETE FROM usuario;
DELETE FROM consultorio;


INSERT INTO usuario(usuario,password,nombre,apellido,rol) VALUES ("admin","admin1234","Maria","Recepci&oacute;n","admin");

INSERT INTO usuario(usuario,password,nombre,apellido,rol) VALUES ("jlopez","lopezj","Juan","Lopez","doc");
INSERT INTO usuario(usuario,password,nombre,apellido,rol) VALUES ("jgarcia","garciaj","Jose","Garcia","doc");

INSERT INTO paciente(id_paciente,nombre,apellido) VALUES (1,"Nicolas","Callejas");
INSERT INTO paciente(id_paciente,nombre,apellido) VALUES (2,"Vanesa","Caceres");
INSERT INTO paciente(id_paciente,nombre,apellido) VALUES (3,"Carla","Aballay");

INSERT INTO consultorio(numero,nombre,descripcion) VALUES (1,"Sala 1","Medico Clinico");

INSERT INTO turno(fecha,id_paciente,usuario,numero) VALUES("2013-09-05 15:00:00",1,"jlopez",1);
INSERT INTO turno(fecha,id_paciente,usuario,numero) VALUES("2013-09-05 15:30:00",2,"jlopez",1);
INSERT INTO turno(fecha,id_paciente,usuario,numero) VALUES("2013-09-05 15:30:00",1,"jgarcia",1);





