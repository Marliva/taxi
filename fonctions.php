<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT'] . "/taxis");
define("WEB_ROOT", "/taxis");

function dg($data)
{
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
}

function dd($data)
{
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
    die();
}

function listerVehicules($pdo)
{
    $sql = "SELECT * FROM vehicule ORDER BY id_vehicule ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $vehicules = $stmt->fetchAll();
    return $vehicules;
}

function getVehicule($pdo, $idParam)
{
    $sql = "SELECT * FROM vehicule WHERE id_vehicule = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'id' => $idParam
    ]);
    $vehicule = $stmt->fetch();
    return $vehicule;
}

function getLastInsertId($pdo)
{
    $sql = "SELECT LAST_INSERT_ID()";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $last_insert_id = $stmt->fetch();

    return $last_insert_id;
}


function ajoutVehicule($pdo, $marqueParam, $modeleParam, $couleurParam, $immatriculationParam)
{
    $sql = "INSERT INTO vehicule (marque, modele, couleur, immatriculation) VALUES (:marque, :modele, :couleur, :immatriculation)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':marque'          => $marqueParam,
        ':modele'          => $modeleParam,
        ':couleur'         => $couleurParam,
        ':immatriculation' => $immatriculationParam
    ]);
}

function modifierVehicule($pdo, $marqueParam, $modeleParam, $couleurParam, $immatriculationParam, $idParam)
{
    $sql = "UPDATE vehicule SET marque = :marque, modele = :modele, couleur = :couleur, immatriculation = :immatriculation WHERE id_vehicule = :id";
    $stmt = $pdo->prepare($sql);
    $test = $stmt->execute([
        ':id'              => $idParam,
        ':marque'          => $marqueParam,
        ':modele'          => $modeleParam,
        ':couleur'         => $couleurParam,
        ':immatriculation' => $immatriculationParam
    ]);

    return $test;
}

function nettoyer($dataParam)
{
    $data = trim($dataParam);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function getNbLigneTable($pdo, $table)
{
    $sql = "SELECT COUNT(*) FROM `" . $table . "`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}