<header>
    <img src="img/logo_alaska.png" alt="logoAlaska" class="logo" />
    <h1>Billet simple pour l'Alaska</h1>
    <div id="menu">
        <a href="index.php">Accueil</a>
        <!-- Je fais une condition qui me dit que si l'utilisateur est connecter j'affche certain lien qui ramene sur la page de l'admin et qui permet de deconnecter -->
        <?php if (isset ($_SESSION['username']) && isset($_SESSION['password']) ) { ?>
        <a href="index.php?admin=connexion">Admin</a>
        <a href="index.php?admin=deconnection">Déconnexion</a>
        <!--Sinon j'affiche le lien de la page de connexion -->
        <?php }else { ?>
        <a href="index.php?admin=connexion">Connexion</a>
        <a href="index.php?c=contact">Contact</a>
        <?php
        } ?>
    </div>
</header>