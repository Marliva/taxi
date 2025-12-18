<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>/assets/css/style.css">
    <title>Véhicules</title>
</head>

<body>
    <main class="container">
        <?php
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
    </main>
</body>

</html>