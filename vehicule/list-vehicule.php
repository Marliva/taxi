<?php
include '../fonctions.php';
require '../connexiondb.php';

$vehiculeArray = listerVehicules($pdo);

dg($vehiculeArray);