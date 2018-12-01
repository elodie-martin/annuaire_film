
# Dependance

composer require "twig/twig:^2.0"
npm install bootstrap
autoComplete.js :  https://github.com/TarekRaafat/autoComplete.js/blob/master/README.md
yarn add owl.carousel jquery or npm install --save owl.carousel


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



// GOOD REQUEST 

SELECT Titre, 
(SELECT GROUP_CONCAT(DISTINCT g.Themes SEPARATOR ",") FROM Genre g 
INNER JOIN Liaison_ID_Genre_Film gf ON g.ID = gf.ID_Genre 
Where gf.ID_Film = Film.id)
FROM Film 
INNER JOIN Liaison_ID_Genre_Film gf ON gf.ID_Film = Film.id
INNER JOIN Genre g ON g.ID = gf.ID_Genre WHERE gf.ID_Genre = 3 GROUP BY Film.id;