<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billet simple pour l'Alaska</title>

</head>

<body>
    <?php include 'includes/header.php'; ?>
    <img src="img/alaska.jpg" alt="imageSlideAlaska" class="slide" />
    <!-- La  page d'acceuil affiche les billets-->
    <div id='articles'>
        <?php 

        while($donnees = $reponse-> fetch())
      { ?>
        <!--On recupere le titre, la date , le message et la catégorie du billet-->
        <h2>
            <?php echo htmlspecialchars ($donnees['titre'])?>
        </h2>
        <p>
            <?php $date = htmlspecialchars ($donnees['date']);
        echo date('d-m-Y', strtotime($date));?>
        </p>
        <p>
            <?php echo nl2br(htmlspecialchars($donnees['message']));?>..</p>
        <p>
            <?php echo htmlspecialchars ($donnees['categorie'])?>
        </p>
        <a href="index.php?a=billet&articles=<?php echo $donnees['id']; ?>">Lire la suite</a>

        <?php
        }
        ?>
    </div>

    <?php require 'includes/footer.php'; ?>


</body>

</html>
