create table uti_utilisateur(

uti_oid int auto_increment primary key not null,
uti_pseudo varchar(60),
unique (uti_pseudo),
uti_nom varchar(60),
uti_prenom varchar(60),
uti_mdp varchar(250),
uti_autorisation int not null
);

create table cli_client(

cli_oid int auto_increment primary key not null, 
cli_nom varchar(250),
cli_prenom varchar(250), 
cli_email varchar(250), 
cli_adresse varchar(500),
cli_cp char(5),
cli_ville varchar(100),
cli_tel char(12),
cli_commentaire text, 
cli_provenance varchar(60)
 );

create table tra_travaux(

tra_oid int auto_increment primary key not null,
tra_titre varchar(100),
tra_description varchar(255),
tra_prix float, 
tra_date_debut date,
tra_date_devis date, 
tra_date_rappel date, 
tra_mode_paiment varchar(100),
tra_verif TINYINT(1),
cli_oid int not null ,
constraint FOREIGN KEY(cli_oid)
references cli_client(cli_oid)
);

create table com_commentaire(

com_oid int auto_increment primary key not null, 
com_commentaire text, 
tra_oid int not null, 
uti_oid int not null, 
constraint FOREIGN KEY(tra_oid)
references tra_travaux(tra_oid)
ON DELETE CASCADE,  
constraint FOREIGN KEY(uti_oid) 
references uti_utilisateur(uti_oid)
ON DELETE CASCADE 
);
