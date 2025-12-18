<?php
$titleTaxis = 'Ajouter un chauffeur';
require PATH_PROJET . '/views/partials/header.php';
?>
        <h1>Ajouter un chauffeur</h1>
        <form action="" method="post">

            <div>
                <label for="nom">nom</label>
                <input type="text" name="nom" id="nom">
            </div>

            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom">
            </div>

            <button type="submit" name="envoyer">Ajouter</button>
        </form>
<?php
include PATH_PROJET . '/views/partials/footer.php';
?>