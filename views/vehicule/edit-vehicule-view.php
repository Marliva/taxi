<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title>Modifier un véhicule</title>
</head>

<body>
    <main class="container">
        <h1>Modifier un véhicule</h1>
        <form action="?id=<?= $vehicule['id_vehicule']; ?>" method="post">

            <div>
                <label for="marque">Marque</label>
                <input type="text" name="marque" value="<?= $vehicule['marque']; ?>">
            </div>

            <div>
                <label for="modele">Modèle</label>
                <input type="text" name="modele" value="<?= $vehicule['modele']; ?>">
            </div>

            <div>
                <label for="couleur">Couleur</label>
                <input type="text" name="couleur" value="<?= $vehicule['couleur']; ?>">
            </div>

            <div>
                <label for="immatriculation">Immatriculation</label>
                <input type="text" name="immatriculation" value="<?= $vehicule['immatriculation']; ?>">
            </div>

            <button type="submit" name="envoyer">Modifier</button>
            <button type="reset" name="annuler">Annuler</button>
        </form>


    </main>

</body>

</html>