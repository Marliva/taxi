# Dashboard Taxi

## Principe

- Création d'une base de données Mysql avec utilisation phpmyadmin, d'une agence de taxis.
- Trois tables (véhicules ; conducteurs et associations des deux).
- Mise en place du PDO pour connecter la base de données avec le projet PHP.
- Création d'un dashboard avec indiqué dessus le nombre de véhicules et le nombre de conducteurs.
- Views de la liste des véhicules et de la liste des conducteurs.
- Ajout de fonctions pour supprimer/ajouter/modifier des données de la base de données.


## Arborescence de la structure du projet

```
│   connexiondb.php
│   fonctions.php
│   index.php
│   README.md
│   taxis.sql
│   
├───assets
│   └───css
│           style.css
│
├───driver
│       add-driver.php
│       del-driver.php
│       edit-driver.php
│       list-driver.php
│
├───vehicule
│       add-vehicule.php
│       del-vehicule.php
│       edit-vehicule.php
│       list-vehicule.php
│
└───views
    ├───driver
    │       add-driver-view.php
    │       edit-driver-view.php
    │       list-driver-view.php
    │
    └───vehicule
            add-vehicule-view.php
            edit-vehicule-view.php
            list-vehicule-view.php

```