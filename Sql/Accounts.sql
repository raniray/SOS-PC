Create database if not exists sosPc; 
use sosPc;
SET @@auto_increment_increment=5; /*low security mesure*/ 
drop table if exists Client_;
CREATE TABLE Client_ (
idUser int(30) auto_increment NOT NULL, 
nomUser varchar(30) NOT NULL,
prenomUser varchar(30) NOT NULL,
mailUser varchar(30) unique NULL,
pswdUser varchar(255) NOT NULL,
statusAcount char not NULL,
ccpUser int(20),
profilePicUser varchar(60),
telUser int(20),
dateNaissUser date,
PRIMARY KEY (idUser) );
drop table if exists Reparateur_;
CREATE TABLE Reparateur_ (
idUser int(30) auto_increment NOT NULL, 
nomUser varchar(30) NOT NULL,
prenomUser varchar(30) NOT NULL,
mailUser varchar(30) unique NULL,
pswdUser varchar(255) NOT NULL,
statusAcount char not NULL,
profilePicUser varchar(60),
telUser int(20),
profession varchar(255),
classement int(20),
biography LONGTEXT, 
PRIMARY KEY (idUser) );
drop table if exists Admin;
CREATE TABLE Admin_ (
idUser int(30) auto_increment NOT NULL, 
nomUser varchar(30) NOT NULL,
prenomUser varchar(30) NOT NULL,
mailUser varchar(30) unique NULL,
pswdUser varchar(255) NOT NULL,
statusAcount char not NULL,
profilePicUser varchar(60),
telUser int(20),
PRIMARY KEY (idUser) );




