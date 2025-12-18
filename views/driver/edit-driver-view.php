<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title>Modifier un chauffeur</title>
</head>

<body>
    <main class="container">
        <h1>Modifier un chauffeur</h1>
        <form action="?id=<?= $driver['id_conducteur']; ?>" method="post">

            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="<?= $driver['nom']; ?>">
            </div>

            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" value="<?= $driver['prenom']; ?>">
            </div>

            <button type="submit" name="envoyer">Modifier</button>
            <button type="reset" name="annuler">Annuler</button>
        </form>


    </main>

</body>

</html>