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


## Exemple de contenu des tables (les données indiquées sont fictives. Toute ressemblance avec l'identité d'une personne et/ou d'un modèle/immatriculation d'un véhicule est fortuite)

| **id_conducteur** | **nom**    | **prenom** |
|--------------------|--------------|---------------|
| **1**             | Martin     | Sophie     |
| **2**             | Pandre     | Philippe   |
| **3**             | Avigny     | Julien     |
| **4**             | Dupont     | Alexandre  |
| **5**             | Bernard    | Marie      |
| **6**             | Lefevre    | Pierre     |
| **7**             | Roux       | Julie      |
| **8**             | Moreau     | Thomas     |
| **9**             | Simon      | Laura      |

| **id_vehicule**   | **marque**     | **modele**      | **couleur** | **immatriculation** |
|--------------------|--------------|---------------|-----------|--------------------|
| **11**            | Renault    | Scenic      | rouge   | WW-011-WW       |
| **12**            | Citroën    | C8          | bleu    | WW-012-WW       |
| **13**            | Mercedes   | CLS         | noir    | WW-013-WW       |
| **14**            | Peugeot    | 308         | gris    | WW-014-WW       |
| **15**            | Peugeot    | 2008        | noir    | WW-015-WW       |
| **16**            | Volkswagen | Golf        | blanc   | WW-016-WW       |
| **17**            | Renault    | Clio        | noir    | WW-017-WW       |
| **18**            | Citroën    | C3          | rouge   | WW-018-WW       |
| **19**            | Mercedes   | Classe A    | noir    | WW-019-WW       |
| **20**            | Volkswagen | Passat      | bleu    | WW-020-WW       |
| **23**            | Nissan     | Qashqaï     | Gris    | WW-023-WW       |
| **25**            | Opel       | Vectra      | Noir    | WW-025-WW        |
| **26**            | Renault    | Twingo      | Grise   | WW-026-WW       |
