# Amanoz Vuln

This project is a vulnerable PHP-based e-commerce application designed for learning and practicing penetration testing techniques. It simulates a real-world online store, with various security flaws intentionally introduced to help users understand common web vulnerabilities and how to exploit them in a controlled environment.


## Contexte : PHP e-commerce project with a focus on penetration testing.

## <u>Client Use Case</u> :

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

## <u>Admin Use Case</u> :

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
## <u>Class Diagram</u> :

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

## <u>Database</u> :

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

### admin :

I log into the login interface to access the site:

![imgr/f1.PNG](imgr/f1.PNG)

Clients have the option to create an account :

![imgr/f2.PNG](imgr/f2.PNG)

Homepage (accueil.php) :

![imgr/f3.PNG](imgr/f3.PNG)

We can see the different items in the catalog. From this page, we can modify and delete items :

![imgr/f4.PNG](imgr/f4.PNG)

To add an item, I click on the user icon :

![imgr/f5.PNG](imgr/f5.PNG)


![imgr/f6.PNG](imgr/f6.PNG)

The product has been successfully modified. To modify the item, I click on the yellow icon of the product :

![imgr/f7.PNG](imgr/f7.PNG)
 

Modification of the project :

![imgr/f8.PNG](imgr/f8.PNG)

The product has been successfully modified :

![imgr/f9.PNG](imgr/f9.PNG)

To delete a product, I click on the red icon of the product :

![imgr/f10.PNG](imgr/f10.PNG)

The product has been successfully deleted :

![imgr/f11.PNG](imgr/f11.PNG)

## Client :

I log in as a use :

![imgr/f12.PNG](imgr/f12.PNG)

I log in as a use :

![imgr/f13.PNG](imgr/f13.PNG)

The items :

![imgr/f14.PNG](imgr/f14.PNG)

Le panier de l'utilisateur connectée :

![imgr/f15.PNG](imgr/f15.PNG)

he logged-in user's cart :

![imgr/f16.PNG](imgr/f16.PNG)

After ordering, I check my orders :

![imgr/f17.PNG](imgr/f17.PNG)

The entries :

![imgr/f18.PNG](imgr/f18.PNG)

Login :

![imgr/f19.PNG](imgr/f19.PNG)

Joe's credentials have been successfully updated :

![imgr/f20.PNG](imgr/f20.PNG)
