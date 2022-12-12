/*
    Autor: Manuel Martín Alonso.
    Utilidad: Este programa consiste en cargar datos en la tabla Departamento y en la tabla Usuario.
    Fecha-última-revisión: 24-11-2022.
*/
use DB204DWESProyectoTema5;
-- Inserción de datos en la tabla Departamento.
insert into T02_Departamento values
("INF","Departamento de Informatica",now(),3500.5,null),
("FOL","Departamento de FOL",now(),1500.5,null),
("LEN","Departamento de Lengua",now(),500.12,null),
("MAT","Departamento de Matemáticas",now(),1600.6,null);
-- Inserción de datos en la tabla Usuario.
insert into T01_Usuario(T01_CodUsuario,T01_Password,T01_DescUsuario,T01_FechaHoraUltimaConexion) values
('heraclio',sha2(concat('heraclio','paso'),256),'Heraclio Profesor',now()),
('alberto',sha2(concat('alberto','paso'),256),'Alberto Profesor',now()),
('amor',sha2(concat('amor','paso'),256),'Amor Profesor',now()),
('antonio',sha2(concat('antonio','paso'),256),'Antonio Profesor',now()),
('carmen',sha2(concat('carmen','paso'),256),'Carmen Profesor',now()),
('ricardo',sha2(concat('ricardo','paso'),256),'Ricardo Alumno',now()),
('david',sha2(concat('david','paso'),256),'David Alumno',now()),
('luis',sha2(concat('luis','paso'),256),'Luis Alumno',now()),
('otalvaro',sha2(concat('otalvaro','paso'),256),'Alejandro Alumno',now()),
('josue',sha2(concat('josue','paso'),256),'Josue Alumno',now()),
('manuel',sha2(concat('manuel','paso'),256),'Manuel Alumno',now()),
('admin',sha2(concat('admin','paso'),256),'Administrador',now());
