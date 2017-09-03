Create database if not exists sosPc; 
use sosPc;
SET @@auto_increment_increment=5; /*low security mesure*/ 


/*Table User */
drop table if exists User_;
CREATE TABLE User_ (
idUser int(30) auto_increment NOT NULL, 
nomUser varchar(30) NOT NULL,
prenomUser varchar(30) NOT NULL,
mailUser varchar(30) unique NULL,
pswdUser varchar(255) NOT NULL,
statusAcount char not NULL,
profilePicUser varchar(60),
telUser int(20),
dateNaissUser date,
dateInscription date,
PRIMARY KEY (idUser) );

/*Table client*/
drop table if exists Client_;
CREATE TABLE Client_ (
idUser int(30) NOT NULL, 
ccpUser int(20),
PRIMARY KEY (idUser) );

/*Table Réparateur*/
drop table if exists Reparateur_;
CREATE TABLE Reparateur_ (
idUser int(30) NOT NULL, 
profession varchar(255),
classement int(20),
dateInscription date,
biography LONGTEXT, 
PRIMARY KEY (idUser) );

/*Table Annonce*/
drop table if exists Annonce_;
CREATE TABLE Annonce_ (
idAnnonce int(30) auto_increment NOT NULL,
annoncePic varchar(60),
annonceContent varchar(60) NOT NULL, /*lien vers un fichier text du Contenu de l'annocne*/
dateCreation date NOT NULL,
prix int(11) NOT NULL,
nombreDeVues int(30) NOT NULL,
durreeValidite int(30) NOT NULL, /*en nombre de jours */
PRIMARY KEY (idAnnonce) );

/*Table Demande Réparation*/
drop table if exists Demande_;
CREATE TABLE Demande_ (
idDemande int(30) auto_increment NOT NULL,
idClient int(30) NOT NULL,
modelePc varchar(100) NOT NULL,
processeur varchar(60),
ramPc varchar(60),
osPc varchar(60),
ancientePc varchar(255),
intitulePanne varchar(255) NOT NULL,
typePanne char,
descriptionPanne longtext NOT NULL,
pannePic varchar(60),
idReparateur int(30),
dateCreation date NOT NULL,
etatDemande varchar(60) NOT NULL,
tauxAvancement DECIMAL(2,2) NOT NULL,
prixAnnonce int(11),
discussionId int (30),
PRIMARY KEY (idDemande) );

/*Table de discussions relatives aux réparations*/
drop table if exists Discussion_;
CREATE TABLE Discussion_ (
idDiscussion int(60) auto_increment NOT NULL,
idUser1 int(30) NOT NULL,
idUser2 int(30) NOT NULL,
listeMessages  text NOT NULL, /*id des messages séparés par des virgules*/
PRIMARY KEY (idDiscussion ) );

/*Table des messages*/
drop table if exists message_;
CREATE TABLE message_ (
idmessage int(60) auto_increment NOT NULL,
idDiscussion int(30) NOT NULL,
dateMessage date NOT NULL,
heure time Not NULL,
PRIMARY KEY (idmessage ) );




