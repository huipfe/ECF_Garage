# ECF_Garage_2023

## Important à lire avant tout, contexte de mon travail.
--
En Local (Laragon) : http://localhost/ECF_Garage/public/main
(Suivre la méthode pour l'installer plus bas))


En déployé, avec Heroku : https://ecfgarage-31eec1271c13.herokuapp.com/
(Si heroku bug, ou à des problèmes avec des fonctionnalités, passer avec la méthode Locale via Laragon, comme expliquer ci-dessous)

Il y aura forcément des erreurs que je n'ai pas pu régler avec heroku, car j'avais prévu du local durant des mois, car on nous avait dit que l'utilisation des deux était équivalente, mais 2 jours avant les dates de rendu, on nous prévient que le déploiement est supérieur, est qu'il faut le faire, et que c'est mieux que du local.

Donc si j'ai moins de points à cause de ça, je m'en fiche, on m'a prévenu seulement au dernier moment, car durant des mois les formateurs ont été INCAPABLE de nous raconter la même version, et de se mettre d'accord sur un point CRUCIAL !

Cela me dégoute réellement, plus jamais je ne développerais en local comme ça, vu la différence et la galère d'implémentation, pour déployer.
--


## ECF
un fichier readme.md contenant la démarche à suivre pour l’exécution en local
(Ne surtout pas oublier, si volonté d'utiliser en local, de passer par Laragon !)

# Point Important - Livrable du projet :
## Fichier Readme.md : 
Ce fichier contient une large explication du fonctionnement de l'application, il explique comment utiliser 
l'app en local, si besoin.

## Fichier Database.sql : 
Dans ce fichier, vous trouverez la base de données, avec les tables, et les données.
Il est dans le dossier src/database/Database.sql.

## La documentation technique : 
Elle est dans le dossier Documentation/Documentation.pdf, c'est réunie dans ce PDF, sinon des versions jpeg
dispersé existe dans les sous dossier du dossier Documentation.

## La charte graphique :
Elle se trouve dispersé dans les sous dossier du dossier Documentation.
Ou elle se trouve dans le pdf qui les réuni tous : Documentation/Documentation.pdf

## Présentation
# Projet Garage Automobile - Application Web Vitrine

Ce projet consiste à créer une application web vitrine pour le Garage V. Parrot, mettant en avant la qualité des services proposés par cette entreprise.

## La documentation technique : 
Elle est dans le dossier Documentation/Documentation.pdf, c'est réunie dans ce PDF, sinon des versions jpeg
dispersé existe dans les sous dossier du dossier Documentation.

## La charte graphique :
Elle se trouve dispersé dans les sous dossier du dossier Documentation.
Ou elle se trouve dans le pdf qui les réuni tous : Documentation/Documentation.pdf

## Présentation
# Projet Garage Automobile - Application Web Vitrine

Ce projet consiste à créer une application web vitrine pour le Garage V. Parrot, mettant en avant la qualité des services proposés par cette entreprise.
## La documentation technique : 
Elle est dans le dossier Documentation/Documentation.pdf, c'est réunie dans ce PDF, sinon des versions jpeg
dispersé existe dans les sous-dossiers du dossier documentation.

## La charte graphique :
Elle se trouve dispersée dans les sous-dossiers du dossier documentation.
Ou elle se trouve dans le PDF qui les réunit tout : Documentation/Documentation.pdf

## Présentation
# Projet Garage Automobile - Application Web Vitrine

Ce projet consiste à créer une application web vitrine pour le Garage V. Parrot, mettant en avant la qualité des services proposés par cette entreprise.

## Technologies utilisées

Serveur :
● Version PHP 8.2.6
● Extension PHP : PDO
● Laragon 6

Front :
● HTML 5
● CSS 3
● JavaScript
● Bootstrap 5

Back :
● PHP 8.2.6 sous PDO
● MySQL

## Documentation - Trello/Figma/Github/Diagramme

### Trello :
https://trello.com/b/oxxE9JtC/ecf-garage
https://trello.com/invite/b/oxxE9JtC/ATTI93766aad838552b95ae14f736af1dd8631763816/ecf-garage
(Important de le voir, ma logique de construction de projet, est expliqué dans les commentaires des cartes,
ainsi que dans les checklists, et les descriptions des cartes, l'historique du projet, est aussi visible)
### Figma : 
https://www.figma.com/file/SaW2sE4UMapRzftQdaG8DU/ECF_Garage?type=design&node-id=9-44&t=l3rijzeslJeOXY32-0
(La charte graphique, ainsi que les maquettes, se retrouve aussi, dans le dossier Documentation, 
en jpeg, dans leur sous dossier Documentation/Figma Maquette)

### Github : 
https://github.com/huipfe/ECF_Garage

### Diagramme : 
https://app.diagrams.net/#Hhuipfe%2FECF_Garage%2Fmaster%2FECF_Garage.drawio
(Le fichier est aussi retrouvable dans ce dossier du projet, 
dans Documentation/Design Diagrams - ECF_Garage.drawio)

# Déploiement/Installation détaillés.
## Installation (si volonté d'utiliser en local)

1. Clonez ce dépôt vers votre machine locale : https://github.com/huipfe/ECF_Garage.git

   ```shell
   git clone https://github.com/huipfe/ECF_Garage.git
   ```

2. Installez Laragon sur votre machine locale : https://laragon.org/download/index.html

   ```shell
   https://laragon.org/download/index.html
   ```

3. Avec Laragon, créez un nouveau projet, et importez le dossier ECF_Garage dans le dossier 'www' de Laragon.

   ```shell
   C:\laragon\www\ECF_Garage
   ```

4. Dans Laragon cochez Apache, et MySQL, et cliquez sur 'Start All'.

   ```shell
   C:\laragon\www\ECF_Garage
   ```

5. Cliquez sur web, pour afficher le site web, ou afficher via le bouton en haut de Laragon Menu et 
suivre le chemin /www/ECF_Garage

   ```shell
   C:\laragon\www\ECF_Garage
   ```

6. Cliquez sur Base de données, via phpmyadmin, et importez le fichier 'Database.sql' dans la base de données. (ou cliquer sur phpmyadmin, via le bouton menu>Mysql>phpMyAdmin)
   Mot de passe : rien, Utilisateur : root

   ```shell
   ECF_Garage/src/Database/Database.sql
   ```

7. La connexion et l'alimentation de la BDD se fait par le fichier 'Db.php' dans le dossier 'src/Database'.

   ```shell
   ECF_Garage/src/Database/Db.php
   ```

8. Naviger sur le site web : http://localhost/ECF_Garage/public/main (page d'accueil)

   ```shell
   http://localhost/ECF_Garage/public/main
   ```

9. et connectez vous avec les identifiants suivants : 
   
      ```shell
      Voir Fonctionnalités, çi dessous. 
      ```

## Fonctionnalités
# US1. Se connecter
'Database.sql' : contient la base de données + tables.
'Db.php' : contient l'alimentation de la base de données.

L'administrateur dispose d'un compte préalablement créé :

email : VincentParrot@gmail.com 
mot de passe : VincentParrotBG (mdp hashé)

Vous pouvez également vous connecter en tant qu'employé :

email : Employer1@gmail.com
mot de passe : Employé123 (mdp hashé)

email : Test1@protonmail.com
mot de passe : Test123Test123 (mdp hashé)


Seul l'administrateur peut générer un compte pour les employés :
Il dispose d'un tableau de bord Admin avec 3 options : créer un compte employé,
modifier les comptes employés, et modifier les horaires d'ouverture.
Son compte n'est pas supprimable. Il a un bouton horaire à la place du bouton supprimé pour son compte

Pour les employés, une fois connecté, ils accèdent à la page produit.
Ils disposent de 3 options, pour leurs véhicules : ajouter un nouveau véhicule, le modifier, 
ou le supprimer. Il ne peuvent que modifier et supprimer les véhicules associées à leur comptes.
(via la clé étrangère 'users_id' dans la table 'voiture' qui est l'id liée à l'user_id dans la table 'users')
Sauf l'administrateur, qui peut modifier et supprimer tous les véhicules, puisque l'admin à tout les droits.

Les utilisateurs se connectent en utilisant leur adresse e-mail et un mot de passe sécurisé.

Le rôle des employés et de gérer leur voiture (supression et modification, ou d'ajout de nouvelle).
Le rôle de l'administrateur est de gérer les employés, les services du garage, et les horaires d'ouverture.
(Ajout d'employé/de service, de modification de service/d'employé, de suppression de service/d'employé, 
et de modification d'horaire.)

# US2. Présenter les services - Modification des différents services
Les services de réparation automobile proposés par le garage sont affichés sur la page "services".
Seul l'administrateur peut modifier/supprimer/créer les services, et les employés peuvent les voir, ainsi que les boutons, mais n'ont pas l'autorisation d'y accéder.

# US3 Modifier et définir les horaires d'ouvertures 
Depuis son tableau de bord/panel d'administration, grâce au bouton horaire, qui se trouve sûr 
la droite de l'écran à coté de sa ligne, l'administrateur peut modifier les horaires 
d'ouvertures du garage, via un formulaire de modification.
Le formulaire, influence la vue qui se trouve sur le footer du site, visible partout.

# US4. Exposer les voitures d'occasion
Le site web présente les voitures d'occasion disponibles à la vente avec des photos, 
des descriptions détaillées et des informations techniques.
Chaque voiture affiche, la marque, et le modele, ainsi que son prix, une image mise en avant, l'année de mise en circulation et le kilométrage.
(les 6 premières voitures ont été créer par l'admin, la dernière par un employé, vous pouvez en créer d'autres, avec les différents comptes, pour tester la fonctionnalité, et les limitations entre admin et employé, et entre les différents comptes employé eux-même.)

# US5. Filtrer la liste des véhicules d’occasion
Un système de filtres, via des boutons, regrouper en groupes de 3 (années, kilométrage et prix).
Permets aux visiteurs de rechercher des véhicules en fonction d'une fourchette de prix, d'un nombre de kilomètres parcourus ou d'une année de mise en circulation.
(Après 2020>=, avant 2020<=, plus ou égale 2000 km>=, moins ou égale 2000 km<= et moins ou égale 100 0 00 €<=)

# US6. Permettre de contacter l'atelier (fonctionne en Local, avec Laragon)
Les visiteurs peuvent contacter le garage par téléphone (infos en bas de page footer, ou sur la page contact) ou en utilisant un formulaire de contact en ligne. (il fonctionne en local, via Laragon, par le sendMail, qui est dans le dossier Utils)

# US7. Recueillir les témoignages des clients 
- 
<!-- Les visiteurs peuvent laisser des témoignages composés d'un nom, d'un commentaire et d'une note.
Les témoignages sont modérés par un employé du garage et s'affichent sur la page d'accueil.
Les employés du garage peuvent ajouter ou rejeter des témoignages clients directement depuis leur espace dédié. -->
