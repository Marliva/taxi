<?php
include dirname(__DIR__) . '/fonctions.php'; //Le dirname permet de récupérer le chemin du dossier parent et d'éviter des erreurs de "./" ou "../", etc
require dirname(__DIR__) . '/connexiondb.php';

$idSupp = $_GET['id'] ?? null;

if (!is_numeric($idSupp)) {
    dd("Ce véhicule n'existe pas.");
};

$pdo = new PDO($dsn, $user, $pass, $options);
$stm = $pdo->prepare("DELETE FROM vehicule WHERE id_vehicule = :id");
$stm->bindParam(':id', $idSupp, PDO::PARAM_INT);
$suppResult = $stm->execute();

if ($suppResult === true) {
    redirect('/vehicule/list-vehicule.php');
}

// dd($suppResult);

?>