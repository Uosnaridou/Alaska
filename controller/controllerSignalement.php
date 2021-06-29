<?php
class signalement{
    
    public function listeSignalement(){
        require 'modele/modeleSignalement.php';//On appel le bon modele
        $liste = new signalementCommentaire;//On crée un nouvel objet
        $reponse = $liste->listeSignalement();//On appel la bonne fonction
        require 'vue/vueSignalement.php';//On redigire vers la bonne vue
    }
    
    public function ajoutSignalement(){
        require 'modele/modeleSignalement.php';
        $ajout = new signalementCommentaire;//On crée un nouvel objet
        $id_commentaire = $_GET['commentaire'];
        $reponse = $ajout->ajoutSignalement($id_commentaire);//On appel la bonne fonction
        $id_article = $_GET['articles'];
        header('Location: index.php?a=billet&articles=' . $id_article . '');       
    }
    
    public function supprimerSignalement(){
        require 'modele/modeleSignalement.php';//On appel le bon modele
        $supp = new signalementCommentaire;//On crée un nouvel objet
        $id = $_GET['articles'];
        $rep = $supp->supprimerSignalement($id);//On appel la bonne fonction
        $reponse = $supp->listeSignalement();//On appel la bonne fonction
        require 'vue/vueSignalement.php';//On redigire vers la bonne vue
    }
    
    
}