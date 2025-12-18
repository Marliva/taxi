<?php
include dirname(__DIR__) . '/fonctions.php'; //Le dirname permet de récupérer le chemin du dossier parent et d'éviter des erreurs de "./" ou "../", etc
require dirname(__DIR__) . '/connexiondb.php';

$idEdit = $_GET['id'] ?? null;

if (!is_numeric($idEdit)) {
    dd("Ce chauffeur n'existe pas.");
};

$driver = getDriver($pdo, $idEdit);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {
    // ===============================================
    // Traitement du formulaire de modification d'un chauffeur
    // ===============================================

    $nom = nettoyer($_POST['nom']);
    $prenom = nettoyer($_POST['prenom']);

    $testUpate = modifierDriver($pdo, $nom, $prenom, $idEdit);
    // dg($testUpate);
    redirect('/driver/list-driver.php');
}


include PATH_PROJET . '/views/driver/edit-driver-view.php';
// dg($driver);
?>