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


    <div id="contact">
        <p>Merci de remplir les champs pour me contacter</p>
        <form action="" method="post">
            <p>Nom: <input type="text" name="name" size="30" maxlength="60" value="" /></p>
            <p>Adresse Email: <input type="email" name="email" size="30" maxlength="80" value="" /></p>
            <p>Message: <textarea name="comments" rows="5" cols="30"></textarea></p>
            <p><input type="submit" name="submit" value="Envoyer" /></p>
        </form>
    </div>

    <?php require 'includes/footer.php'; ?>


</body>

</html>
