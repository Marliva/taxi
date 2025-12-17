<?php
include dirname(__DIR__) . '/fonctions.php'; //Le dirname permet de récupérer le chemin du dossier parent et d'éviter des erreurs de "./" ou "../", etc
require dirname(__DIR__) . '/connexiondb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {
    // ===============================================
    // Traitement du formulaire d'ajout d'un véhicule
    // ===============================================

    $marque = nettoyer($_POST['marque']);
    $modele = nettoyer($_POST['modele']);
    $couleur = nettoyer($_POST['couleur']);
    $immatriculation = nettoyer($_POST['immatriculation']);

    ajoutVehicule($pdo, $marque, $modele, $couleur, $immatriculation);

    $vehiculeInserted = getLastInsertId($pdo);

    if ($vehiculeInserted) {
        header('Location: ' . WEB_ROOT . '/vehicule/list-vehicule.php');
    }
    exit;
}


include PATH_PROJET . '/views/vehicule/add-vehicule-view.php';
