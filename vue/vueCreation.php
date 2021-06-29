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
            forced_root_block: '',
            force_br_newlines: true,
            force_p_newlines: false

        });

    </script>

</head>

<body>
    <?php require 'includes/header.php' ?>


    <img src="img/alaska.jpg" alt="imageSlideAlaska" class="slide" />
    <a href="index.php?admin=connexion">Retour au choix de l'administrateur</a>

    <!--Formulaire pour crée un nouveau billet-->
    <div id="formulaire">
        <h2>Nouveaux billets</h2>
        <form method="post" action="" id="formulaire" enctype="multipart/form-data">

            <label>Titre du billet</label>
            <input type="text" name="titre" placeholder="Titre" id="titre" /><br />

            <label>date</label>
            <input type="date" name="date" placeholder="Date" id="date" /><br>

            <label>Categories</label>
            <select name="categorie" id="categorie">
                <option value="jour">Jour</option>
                <option value="nuit">Nuit</option>
            </select><br />

            <textarea name="message" id='tinymce'></textarea>

            <input name="submit" type="submit" value="valider" id="valider" />

        </form>
    </div>

    <?php require 'includes/footer.php'; ?>


</body>

</html>
