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
	num_article INTEGER,
	num_utilisateur INTEGER,
	passer Boolean,
	PRIMARY KEY(id_panier),
	FOREIGN KEY(num_utilisateur) REFERENCES Utilisateur(id_utilisateur),
	FOREIGN KEY(num_article) REFERENCES Article(id_article)
);



insert into Utilisateur (username,password,email,administrator) values ("Joe","siojjr","joe@gmail.com",0);
insert into Utilisateur (username,password,email,administrator) values ("Mams","siojjr","mams@gmail.com",0);
insert into Utilisateur (username,password,email,administrator) values ("admin","siojjr","admin@outlook.fr",1);
insert into Utilisateur (username,password,email,administrator) values ("Jule","siojjr","jule@gmail.com",0);
insert into Catalogue (nom_catalogue) values ("canapé");
insert into Catalogue (nom_catalogue) values ("aspirateur");
insert into Catalogue (nom_catalogue) values ("tv");
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Canapé dégradé",1,"Modèle dégradé - 2 coussins - cotton",749.00,"canap1.jpg");
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Canapé marine ",1,"Modèle marine - 2 coussins - cotton",329.00,"canap2.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Canapé gris",1,"Modèle gris - 2 coussins - cotton",315.00,"canap3.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Lit rose",2,"Modèle rose 2 places - 140x200",2199.00,"lit1.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Lit gris",2,"Modèle gris 2 places - 140x200",1549.00,"lit2.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Lit beige",2,"Modèle beige 2 places - 140x200",2449.00,"lit3.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Tv Epsilon",3,"Des couleurs éclatantes avec les Quantum Dots - QLED 100% Color Volume - Design ultra fin 25mm - Résolution 1800x2000",999.00,"tv1.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("Tv Philisp oled 55 LG OLED55A1",3,"Des couleurs Pétillante avec les Quantum Dots - OLED 100% Color Volume - 75mm – Résolution 1500x2000",1500.00,"tv2.jpg"); 
insert into Article (nom_article,num_catalogue,description_article,prix_article,image_article) values ("TV LED Samsung KD43X85J Google TV 2021",3,"Des couleurs éclatantes avec des led – OLED 100% Color Volume – 90mm – 1400x1800",900.00,"tv3.jpg"); 