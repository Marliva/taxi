<?php
include dirname(__DIR__) . '/fonctions.php'; //Le dirname permet de récupérer le chemin du dossier parent et d'éviter des erreurs de "./" ou "../", etc
require dirname(__DIR__) . '/connexiondb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {
    // ===============================================
    // Traitement du formulaire d'ajout d'un driver
    // ===============================================

    $nom = nettoyer($_POST['nom']);
    $prenom = nettoyer($_POST['prenom']);
    
    ajoutDriver($pdo, $nom, $prenom);

    $driverInserted = getLastInsertId($pdo);

    if ($driverInserted) {
        redirect('/driver/list-driver.php');
    }
    exit;
}

include PATH_PROJET . '/views/driver/add-driver-view.php';