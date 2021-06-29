<?php
class controllerArticles{
    
    public function accueil(){
        require 'modele/modeleBillets.php';//on appel le modele qui gere les billets
        $post = new billets();//On crée un nouvel objet
        $reponse = $post->listeBillets();//On appel la fonction que l'ont souhaite de la class billets
        require 'vue/pageAccueil.php';//On appel la vue
    }
    
    public function billet(){
        require 'modele/modeleBillets.php';
        require 'modele/modeleCommentaires.php';
        $post = new commentaires();
        $article_id = $_GET['articles'];
        
        if (isset($_POST['pseudo']) && isset($_POST['commentaire'])){
            $pseudo = $_POST['pseudo'];
            $commentaire = $_POST['commentaire'];
            $req = $post->ajoutCommentaire($article_id, $pseudo,$commentaire);
        }
        
        $rep = $post->commentaire($article_id);
        $post = new billets();
        $reponse = $post->billet($article_id);
        require 'vue/billets.php';
    }
    
    
    
}
