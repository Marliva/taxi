<?php
include 'fonctions.php';
require 'connexiondb.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Dashboard</title>
</head>

<body>

    <div id="title">
        <h1 style="text-align: center;">Dashboard</h1>
    </div>

    <div id="button">
        <a href="./vehicule/list-vehicule.php" role="button">Liste des véhicules</a>
        <a href="./driver/list-driver.php" role="button">Liste des chauffeurs</a>
    </div>

    <div id="stat">
        <p>Nombre de vehicules : <?= getNbLigneTable($pdo, 'vehicule') ?></p>
        <p>Nombre de chauffeurs : <?= getNbLigneTable($pdo, 'conducteur') ?></p>
    </div>
</body>

</html>