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


    <div id="choix">

        <div class="encadrement">
            <!-- lien pour crée un nouvel article -->
            <a href="index.php?admin=creationBillets">Créer</a>
        </div><br />

        <div class="encadrement">
            <!-- lien pour modifier ou supprimer un article -->
            <a href="index.php?admin=listeBillets">Modifier</a>
        </div><br />

        <div class="encadrement">
            <!-- lien pour modifier ou supprimer un article -->
            <a href="index.php?admin=listeBillets">Supprimer</a>
        </div><br />

        <div class="encadrement">
            <!-- lien pour voir les commentaire qui ont etaient signaler -->
            <a href="index.php?signalement=listeSignalement">Messages signalés</a>

        </div>

    </div>

    <?php include 'includes/footer.php'; ?>
</body>

</html>
