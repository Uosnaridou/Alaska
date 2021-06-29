<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billet simple pour l'Alaska</title>

</head>

<body>
    <?php require 'includes/header.php' ?>

    <img src="img/alaska.jpg" alt="imageSlideAlaska" class="slide" />
    <a href="index.php?admin=connexion">Retour au choix de l'administrateur</a>

    <div id='commentaireSignaler'>

        <!--On recupere les commentaires qui ont etaient signaler 5 fois ou plus et on les affiches afin de pouvoir les supprimer-->

        <?php
while ($donnees = $reponse->fetch())
{
?>
        <h2>
            <?php echo htmlspecialchars ($donnees['pseudo'])?>
        </h2>
        <p>Nombre de signalements:
            <?php echo htmlspecialchars ($donnees['signalement'])?>
        </p>
        <p>
            <?php echo htmlspecialchars ($donnees['commentaire'])?>
        </p>
        <a href="index.php?signalement=supprimerSignalement&articles=<?php echo $donnees['id']; ?>">Supprimer</a>

        <?php
} // Fin de la boucle des commentaires
$reponse->closeCursor();
?>

    </div>

    <?php require 'includes/footer.php'; ?>


</body>

</html>
