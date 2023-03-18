DROP database if exists dbamanoz;
CREATE DATABASE dbamanoz DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE dbamanoz;

CREATE TABLE Utilisateur(
	id_utilisateur INTEGER NOT NULL Auto_Increment,
	username varchar(100) NOT NULL,
	password varchar(40) NOT NULL,
	email varchar(100) NOT NULL,
	administrator Boolean,
	PRIMARY KEY(id_utilisateur)
);

CREATE TABLE Catalogue(
	id_catalogue INTEGER NOT NULL Auto_Increment,
	nom_catalogue varchar(50),
	PRIMARY KEY(id_catalogue)
);

CREATE TABLE Article(
	id_article INTEGER NOT NULL Auto_Increment,
	nom_article varchar(100),
	description_article varchar(1000),
	prix_article float,
	image_article varchar(150),
	num_catalogue INTEGER NOT NULL,
	PRIMARY KEY(id_article),
	FOREIGN KEY(num_catalogue) REFERENCES Catalogue(id_catalogue)
);

CREATE TABLE Panier(
	id_panier INTEGER NOT NULL Auto_Increment,
	num_utilisateur INTEGER,
	passer Boolean,
	PRIMARY KEY(id_panier),
	FOREIGN KEY(num_utilisateur) REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE Mettre(
	id_article INTEGER,
	id_panier INTEGER,
	PRIMARY KEY(id_article,id_panier),
	FOREIGN KEY(id_article) REFERENCES Article(id_article),
	FOREIGN KEY(id_panier) REFERENCES Panier(id_panier)
);

insert into Utilisateur (username,password,email,administrator) values ("Zunaid","siojjr","mzunaid2003@gmail.com",0);
insert into Utilisateur (username,password,email,administrator) values ("Léo","siojjr","tranleo95820@gmail.com",0);
insert into Utilisateur (username,password,email,administrator) values ("Enstso","siojjr","enstso@outlook.fr",1);
insert into Utilisateur (username,password,email,administrator) values ("Sami","siojjr","samie17030@gmail.com",0);
insert into Catalogue (nom_catalogue) values ("fauteuil");
insert into Catalogue (nom_catalogue) values ("aspirateur");
insert into Catalogue (nom_catalogue) values ("tv");
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Aspirateur sans fil Dyson V15 Detect™ Absolute (Nickel)",1,"balai électrique - Autonomie 80 min - Temps de charge 4 h - Capacité 0.70 - Tension 21.6 V ",749.00,"canap1.jpg");
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("DYSON Aspirateur balai V8 Motorhead",1,"balai électrique - Autonomie 40 min - Temps de charge 5 h - Capacité 0.54 - Tension 21.6 V",329.00,"canap2.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Série 8 Aspirateur rechargeable Unlimited Blanc ",1,"Balai électrique - autonomie 40 min - Temps de charge 5 h- capacité 0.50 - Tension 18,0 V",315.00,"canap3.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Réfrigérateur SAMSUNG",2,"Réfrigérateur de 636 L (idéal pour 6 personnes et +) – Congélateur : 400 L - multi-portes",2199.00,"lit1.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Réfrigérateur HAIER",2,"Réfrigérateur de 428 L (idéal pour 4 personnes et +) - Congélateur : 200 L - multi-portes ",1549.00,"lit2.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Réfrigérateur Américain Samsung",2,"Réfrigérateur de 389 L (idéal pour 3 personnes et +) - Congélateur : 225 L – multi portes",2449.00,"lit3.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Télévision Samsung QLED 65Q60A 2021, SERIE 6",3,"Des couleurs éclatantes avec les Quantum Dots - QLED 100% Color Volume - Design ultra fin 25mm - Résolution 1800x2000",999.00,"tv1.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Tv LG oled 55 LG OLED55A1",3,"Des couleurs Pétillante avec les Quantum Dots - OLED 100% Color Volume - 75mm – Résolution 1500x2000",1500.00,"tv2.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("TV LED SONY KD43X85J Google TV 2021",3,"Des couleurs éclatantes avec des led – OLED 100% Color Volume – 90mm – 1400x1800",900.00,"tv3.jpg"); 