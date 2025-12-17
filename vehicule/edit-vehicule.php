<?php
include dirname(__DIR__) . '/fonctions.php'; //Le dirname permet de récupérer le chemin du dossier parent et d'éviter des erreurs de "./" ou "../", etc
require dirname(__DIR__) . '/connexiondb.php';

$idEdit = $_GET['id'] ?? null;

if (!is_numeric($idEdit)) {
    dd("Ce véhicule n'existe pas.");
};

$vehicule = getVehicule($pdo, $idEdit);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {
    // ===============================================
    // Traitement du formulaire de modification d'un véhicule
    // ===============================================

    $marque = nettoyer($_POST['marque']);
    $modele = nettoyer($_POST['modele']);
    $couleur = nettoyer($_POST['couleur']);
    $immatriculation = nettoyer($_POST['immatriculation']);

    $testUpate = modifierVehicule($pdo, $marque, $modele, $couleur, $immatriculation, $idEdit);

    // dg($testUpate);
    header('Location: ' . WEB_ROOT . '/vehicule/list-vehicule.php');
    exit;
}


include PATH_PROJET . '/views/vehicule/edit-vehicule-view.php';
// dg($vehicule);
?>