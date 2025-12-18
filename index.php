<?php
include 'fonctions.php';
require 'connexiondb.php';
?>
<a href="./vehicule/list-vehicule.php">Liste des véhicules</a>
<a href="./driver/list-driver.php">Liste des chauffeurs</a>
<p>Nombre de vehicules : <?= getNbLigneTable($pdo, 'vehicule') ?></p>
<p>Nombre de chauffeurs : <?= getNbLigneTable($pdo, 'conducteur') ?></p>