# Amanoz Vuln

## Contexte : Projet php e-commerce, vulnérable introduction au pentest.

## <u>Cas d'utilisation Client</u> :

```plantuml
@startuml Amanoz
left to right direction
:Client:
package Amanoz{
    Client--(Se connecter)
    
    (Se connecter)<..(Consulter le catalogue) : <<include>>
	(Se connecter)<..(Commander des articles) : <<include>>
	(Se connecter)<..(Changer ses identifiants) : <<include>>
	
}
@enduml
```

## <u>Cas d'utilisation Admin</u> :
```plantuml
@startuml Amanoz
left to right direction
:Admin:
package Amanoz{
    Admin--(Se connecter)
    
    (Se connecter)<..(Ajouter des articles) : <<include>>
	(Se connecter)<..(Modifier les articles) : <<include>>
	(Se connecter)<..(Supprimer les articles) : <<include>>
	
}
@enduml
```
## <u>Diagramme de classe</u> :

```plantuml
@startuml
left to right direction
class Catalogue {
  <u>id_catalogue</u>
  nom_catalogue

}

class Article {
    <u>id_article</u>
    nom_article
    description_article
    prix_article
    image_article
    num_catalogue
}

class Utilisateur {
    <u>id_utilisateur</u>
    username
    password
    email
    administrator
}

class Panier{
    <u>id_panier</u>
    num_article
    num_utilisateur
	passer
}


Catalogue "1..1"--- "1..*" Article
Article "1..*"---"0..*" Panier
Utilisateur "1..1 "---"0..1"Panier

@enduml
```

## <u>Base de données</u> :

```sql
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

```

### En admin :

je me connecte à l'interface de connexion pour accéder au site  :
![imgr/f1.PNG](imgr/f1.PNG)

Les clients ont la possiblité de créer un compte :
![imgr/f2.PNG](imgr/f2.PNG)

 La page accueil.php :

![imgr/f3.PNG](imgr/f3.PNG)

Nous pouvons voir les différents articles du catalogue Lit depusi cette page nous avons la possiblité de modifier et de supprimer l'article :

![imgr/f4.PNG](imgr/f4.PNG)

Pour ajouter un article je clique sur l'icone de  l'utilisateur :

![imgr/f5.PNG](imgr/f5.PNG)


![imgr/f6.PNG](imgr/f6.PNG)

le produit a bien été modifiée et  pour modifier l'article je clique sur l'icone jaune du produit :

![imgr/f7.PNG](imgr/f7.PNG)
 

Modification du projet :

![imgr/f8.PNG](imgr/f8.PNG)

Le produit a bien été modifiée :

![imgr/f9.PNG](imgr/f9.PNG)

Pour supprimer un produit, je clique sur l'icone rouge du produit :

![imgr/f10.PNG](imgr/f10.PNG)

Le produit a bien été supprimée :

![imgr/f11.PNG](imgr/f11.PNG)

## Client :

Je me connecte en tant qu'utilisateur :

![imgr/f12.PNG](imgr/f12.PNG)

accueil.php connecter en tant que Joe :

![imgr/f13.PNG](imgr/f13.PNG)

Les articles :

![imgr/f14.PNG](imgr/f14.PNG)

Le panier de l'utilisateur connectée:

![imgr/f15.PNG](imgr/f15.PNG)

Après avoir commandée je consulte mes commandes :

![imgr/f16.PNG](imgr/f16.PNG)

L'utilisateur a la possibilitée de modifier ses identifiants :

![imgr/f17.PNG](imgr/f17.PNG)

Les saisies :

![imgr/f18.PNG](imgr/f18.PNG)

Connection :

![imgr/f19.PNG](imgr/f19.PNG)

Les identifiants de joe ont bien été modifiées :

![imgr/f20.PNG](imgr/f20.PNG)