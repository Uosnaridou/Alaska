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

    <div id="categories">
        <!--On affiche les billets suivant la catégories ou l'ont ai-->
        <?php
while ($donnees = $reponse->fetch())
{
?>
        <h2>Catégorie:
            <?php echo htmlspecialchars ($donnees['categorie'])?>
        </h2>
        <h3>
            <?php echo htmlspecialchars ($donnees['titre'])?>
        </h3>
        <p>
            <?php echo htmlspecialchars ($donnees['message'])?>
        </p>
        <p>
            <?php $date = htmlspecialchars ($donnees['date']);
        echo date('d-m-Y', strtotime($date));?>
        </p>
        <?php
} // Fin de la boucle des commentaires
$reponse->closeCursor();
?>

    </div>

    <?php require 'includes/footer.php'; ?>

</body>

</html>
