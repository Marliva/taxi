<?php

define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT'] ."/taxis");
define("WEB_ROOT", "/taxis");

function dg($data) {
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
}

function dd($data) {
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
    die();
}

function listerVehicules($pdo) {
    $sql = "SELECT * FROM vehicule";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $vehicules = $stmt->fetchAll();
    return $vehicules;
}

function nettoyer($dataParam) {
    $data = trim($dataParam);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}