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

    <div id="connexion">
        <!--Formulaire de connexion-->
        <form action="" method="POST" id="formConnexion">

            <p><label for="">Pseudo: &nbsp;</label>
                <input type="text" name="username" id="champPseudo" required></p>

            <p><label for="">Mot de passe: &nbsp;</label>
                <input type="password" name="password" id="champPseudo" required></p>

            <button type="submit" class="submitConnexion">Se connecter</button>

        </form>

    </div>

    <?php require 'includes/footer.php'; ?>

</body>

</html>
