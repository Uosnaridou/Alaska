<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billet simple pour l'Alaska</title>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script type="text/javascript">
        tinyMCE.init({
            mode: "textareas",
            theme: "modern",
            forced_root_block: false,
            force_br_newlines: true,
            force_p_newlines: false
        });

    </script>
</head>

<body>
    <?php require 'includes/header.php' ?>


    <img src="img/alaska.jpg" alt="imageSlideAlaska" class="slide" />
    <a href="index.php?admin=connexion">Retour au choix de l'administrateur</a>

    <?php
        while ($donnees = $reponse->fetch())
		{
            ?>

    <!--Formulaire pour modifier un billet avec les informations du billet selectionner-->
    <div id="formulaire">
        <h2>Modifier un billet</h2>
        <form method="post" name="editer" id="formulaire" action="">

            <label> Titre: </label>
            <input type="text" name="titre" id="titre" value="<?php echo $donnees['titre'] ?>" /><br />
            <!--On recupere le titre du billet et la date-->

            <label>Date:</label>
            <input type="text" name="date" id="date" value="<?php echo  $donnees['date'] ?>" /><br />

            <label>Categories</label>
            <select name="categorie" id="categorie">
                <option value="jour">Jour</option>
                <option value="nuit">Nuit</option>
            </select><br />

            <div id='tinymce'>
                <!--On recupere le message et on le met dans le champ du pluging tinycme-->
                <textarea name="message"><?php echo  $donnees['message'] ?></textarea><br /><br />

            </div>

            <div id="twoButton">
                <input name="Submit" type="submit" value="valider" id="valider" />&nbsp;
            </div>

        </form>

        <?php
		}
            $reponse->closeCursor();
	?>

    </div>

    <?php require 'includes/footer.php'; ?>

</body>

</html>
