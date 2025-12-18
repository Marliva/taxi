<?php
require PATH_PROJET . '/views/partials/header.php';
?>
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
<?php
include PATH_PROJET . '/views/partials/footer.php';
?>