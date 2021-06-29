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

    <a href="index.php">Retour à la liste des articles</a>
    <div id="articles">
        <!--On affiche le billet en recupérent les donnees enregistrées dans la base de donnée -->
        <?php
while ($donnees = $reponse->fetch())
{
?>
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
            <?php $date =  htmlspecialchars ($donnees['date']);
        echo date('d-m-Y', strtotime($date));?>
        </p>
        <?php
} // Fin de la boucle des commentaires
$reponse->closeCursor();
?>

    </div>
    <div class="separation"></div>
    <div id="ajoutCommentaire">
        <!-- Crée un formulaire pour mettre des commentaires -->
        <form method="post" action="" id="form">
            <div id="blockPseudo">
                <label for="pseudo" class="label">Votre pseudonyme:</label><br />
                <input type="text" name="pseudo" id="pseudo" required />

            </div>
            <div id="blockCommentaires">
                <label for="pseudo" class="label">Votre commentaire:</label><br />
                <textarea name="commentaire" id="messages" required></textarea>
            </div>
            <div class="bouton">
                <input type="submit" class="submit" />
            </div>
        </form>
    </div>

    <div id="commentaires">
        <!--On affiche les commentaires qui on etait publier-->
        <?php
while ($donnees = $rep->fetch())
{
?>
        <h2>
            <?php echo htmlspecialchars ($donnees['pseudo'])?>
        </h2>
        <p>
            <?php echo htmlspecialchars ($donnees['commentaire'])?>

            <a href="index.php?signalement=ajoutSignalement&commentaire=<?php echo $donnees['id']; ?>&articles=<?= $_GET['articles']?>">Signaler</a>

        </p>

        <?php
} // Fin de la boucle des commentaires
$rep->closeCursor();
?>

    </div>

    <?php require 'includes/footer.php'; ?>

</body>

</html>
