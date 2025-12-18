<?php
include dirname(__DIR__) . '/fonctions.php'; //Le dirname permet de récupérer le chemin du dossier parent et d'éviter des erreurs de "./" ou "../", etc
require dirname(__DIR__) . '/connexiondb.php';

$idSuppDriver = $_GET['id'] ?? null;

if (!is_numeric($idSuppDriver)) {
    dd("Ce chauffeur n'existe pas.");
};

$pdo = new PDO($dsn, $user, $pass, $options);
$stm = $pdo->prepare("DELETE FROM conducteur WHERE id_conducteur = :id");
$stm->bindParam(':id', $idSuppDriver, PDO::PARAM_INT);
$suppResult = $stm->execute();

if ($suppResult === true) {
    header("Location: " . WEB_ROOT . "/driver/list-driver.php");
    exit;
}

// dd($suppResult);

?>