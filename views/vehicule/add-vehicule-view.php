<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>/assets/css/style.css">

    <title>Ajouter un véhicule</title>
</head>

<body>
    <main class="container">
        <h1>Ajouter un véhicule</h1>
        <form action="" method="post">

            <div>
                <label for="marque">Marque</label>
                <input type="text" name="marque" id="marque">
            </div>

            <div>
                <label for="modele">Modèle</label>
                <input type="text" name="modele" id="modele">
            </div>

            <div>
                <label for="couleur">Couleur</label>
                <input type="text" name="couleur" id="couleur">
            </div>

            <div>
                <label for="immatriculation">Immatriculation</label>
                <input type="text" name="immatriculation" id="immatriculation">
            </div>

            <button type="submit" name="envoyer">Ajouter</button>
        </form>


    </main>

</body>

</html>