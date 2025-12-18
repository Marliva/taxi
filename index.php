<?php
include 'fonctions.php';
require 'connexiondb.php';

include PATH_PROJET . '/views/partials/header.php';
?>

<div id="title">
    <h1 style="text-align: center;">Dashboard</h1>
</div>

<div id="stat">
    <p>Nombre de vehicules : <?= getNbLigneTable($pdo, 'vehicule') ?></p>
    <p>Nombre de chauffeurs : <?= getNbLigneTable($pdo, 'conducteur') ?></p>
</div>

<?php
include PATH_PROJET . '/views/partials/footer.php';
?>