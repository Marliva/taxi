<?php
include dirname(__DIR__) . '/fonctions.php'; //Le dirname permet de récupérer le chemin du dossier parent et d'éviter des erreurs de "./" ou "../", etc
require dirname(__DIR__) . '/connexiondb.php';

$vehiculeArray = listerVehicules($pdo);

dg($vehiculeArray);