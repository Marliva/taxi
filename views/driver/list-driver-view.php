<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>/assets/css/style.css">
    <title>Chauffeurs</title>
</head>

<body>
    <main class="container">
        <?php
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
    </main>
</body>

</html>