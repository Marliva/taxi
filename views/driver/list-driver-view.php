<?php
$titleTaxis = 'Liste des chauffeurs';
require PATH_PROJET . '/views/partials/header.php';

if (count($driverArray) === 0) :
    echo '<h3>Aucun chauffeur enregistré !</h3>';
    echo '<a href="' . WEB_ROOT . '/driver/add-driver.php"><button class="outline primary">Ajouter un chauffeur</button></a>';
    die();
endif;
?>
<h1 style="text-align: center;">Liste des chauffeurs</h1>
<table>
    <thead>
        <tr>
            <th>
                Nom
            </th>
            <th>
                Prénom
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($driverArray as $driver) : ?>
            <tr>
                <td>
                    <?= $driver['nom'] ?>
                </td>
                <td>
                    <?= $driver['prenom'] ?>
                </td>
                <td>
                    <a href="<?= WEB_ROOT . '/driver/edit-driver.php?id=' . $driver['id_conducteur'] ?>"><button class="outline primary">Modifier</button></a>
                    <a href="<?= WEB_ROOT . '/driver/del-driver.php?id=' . $driver['id_conducteur'] ?>" onclick="return confirm('Voulez-vous vraiment supprimer ce chauffeur ?')"><button class="outline secondary">Supprimer</button></a>
                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div id="addButton">
    <a href="<?= WEB_ROOT . '/driver/add-driver.php' ?>"><button class="outline primary">Ajouter un chauffeur</button></a>
</div>
<?php
include PATH_PROJET . '/views/partials/footer.php';
?>