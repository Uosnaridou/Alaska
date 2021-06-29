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

    <div id='listeArticles'>
        <!--On affiche la liste de tout les billets existant pour avoir le choix entre modifier un billet ou supprimer un billet-->
        <?php 
        while($donnees = $reponse -> fetch())
      { ?>

        <h2>
            <?php echo htmlspecialchars ($donnees['titre'])?>
        </h2>
        <p>
            <?php echo htmlspecialchars ($donnees['categorie'])?>
        </p>
        <p>
            <?php echo htmlspecialchars ($donnees['message'])?>
        </p>
        <p>
            <?php $date = htmlspecialchars ($donnees['date']);
        echo date('d-m-Y', strtotime($date));?>
        </p>
        <div id="lien">
            <a href="index.php?admin=modificationBillets&articles=<?php echo $donnees['id']; ?>">modifier</a>
            <a href="index.php?admin=suppressionBillets&articles=<?php echo $donnees['id']; ?>">Supprimer</a>
        </div>
        <?php
        }
        ?>

    </div>

    <?php require 'includes/footer.php'; ?>


</body>

</html>
