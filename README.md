
# Dependance

composer require "twig/twig:^2.0"
npm install bootstrap


# Arborescence

-views
-conttrollers
-models
-index.php
-img/svg/
-js
-scss/bootstrap/
-README
-.gitignore
-vendor
-.htaccess


# Détail du projet

Projet annuaire de films

   Le but de ce projet est de créer un annuaire de film de type "allociné"
   ce projet se découpe en deux parties.

   La premiere:

A) Préparation de la données

       -désigner un master sur github qui créera un csv avec,

               -le titre

               -la description

               -l'année de sortie

               -le genre

               -le réalisateur

       -chacun doit faire Forker le projet et ajouter 3 films avec une pull request

        -Insérer le csv dans Mysql (ce qui permet de voir ce qu'est un csv)

        -Etude de la Table films (constat qu'un film peut prendre plusieurs genres)

        -Création de la table de liaison qui permet de de lier films à genres

B) Développement du site MVC


        -Creation du .htaccess qui redirige vers l'index.php

        -Création d'un routeur avec $_SERVER['REQUEST_URI'] et un switch

        -Création du models movies.php qui contiendrait toutes fonctions des requêtes sur la table films

        -Creation des views Responsive avec design : "material Design".

Bon courage, Access Code School


# Made by : Lucas, Antonin, Elodie, Killian


SELECT 
Film.Titre,
SUBSTRING_INDEX(GROUP_CONCAT(Genre.Themes), ",", 1) AS Theme1,
SUBSTRING_INDEX(GROUP_CONCAT(Genre.Themes), ",", -1) AS Theme2,
SUBSTRING_INDEX(GROUP_CONCAT(Genre.ID), ",", 1) AS genreId1,
SUBSTRING_INDEX(GROUP_CONCAT(Genre.ID), ",", -1) AS genreId2

FROM Film 
INNER JOIN Liaison_ID_Genre_Film ON Liaison_ID_Genre_Film.ID_Film = Film.ID 
INNER JOIN Genre ON Genre.ID = Liaison_ID_Genre_Film.ID_Genre 
WHERE Film.ID = "11"




SELECT 
Film.Titre,
SUBSTRING_INDEX(GROUP_CONCAT(Genre.Themes), ",", 1) AS Theme1,
SUBSTRING_INDEX(GROUP_CONCAT(Genre.Themes), ",", -1) AS Theme2,
SUBSTRING_INDEX(GROUP_CONCAT(Genre.Themes), ",", 0) AS Theme3,
GROUP_CONCAT(Genre.Themes),
SUBSTRING_INDEX(GROUP_CONCAT(Genre.ID), ",", 1) AS genreId1,
SUBSTRING_INDEX(GROUP_CONCAT(Genre.ID), ",", -1) AS genreId2

FROM Film 
INNER JOIN Liaison_ID_Genre_Film on Liaison_ID_Genre_Film.ID_Film = Film.ID 
INNER JOIN Genre on Genre.ID = Liaison_ID_Genre_Film.ID_Genre 
WHERE Film.ID = "10"