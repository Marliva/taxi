<?php
$titleTaxis = 'Liste des véhicules';
require PATH_PROJET . '/views/partials/header.php';

if (count($vehiculeArray) === 0) :
    echo '<h3>Aucun véhicule enregistré !</h3>';
    echo '<a href="' . WEB_ROOT . '/vehicule/add-vehicule.php"><button class="outline primary">Ajouter un véhicule</button></a>';
    die();
endif;
?>
<h1>Liste des véhicules</h1>
<table>
    <thead>
        <tr>
            <th>
                Marque
            </th>
            <th>
                Modèle
            </th>
            <th>
                Couleur
            </th>
            <th>
                Immatriculation
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($vehiculeArray as $car) : ?>
            <tr>
                <td>
                    <?= $car['marque'] ?>
                </td>
                <td>
                    <?= $car['modele'] ?>
                </td>
                <td>
                    <?= $car['couleur'] ?>
                </td>
                <td>
                    <?= $car['immatriculation'] ?>
                </td>
                <td>
                    <a href="<?= WEB_ROOT . '/vehicule/edit-vehicule.php?id=' . $car['id_vehicule'] ?>"><button class="outline primary">Modifier</button></a>
                    <a href="<?= WEB_ROOT . '/vehicule/del-vehicule.php?id=' . $car['id_vehicule'] ?>" onclick="return confirm('Voulez-vous vraiment supprimer ce véhicule ?')"><button class="outline secondary">Supprimer</button></a>
                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div id="addButton">
    <a href="<?= WEB_ROOT . '/vehicule/add-vehicule.php' ?>"><button class="outline primary">Ajouter un véhicule</button></a>
</div>
<?php
include PATH_PROJET . '/views/partials/footer.php';
?>