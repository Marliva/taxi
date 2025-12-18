<?php
require PATH_PROJET . '/views/partials/header.php';
?>
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
<?php
include PATH_PROJET . '/views/partials/footer.php';
?>