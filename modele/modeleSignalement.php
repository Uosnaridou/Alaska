<?php 
include 'appelBDD.php';
//On crée la class signalement des commentaires
class signalementCommentaire extends appelBDD{
    

    public function ajoutSignalement($id_commentaire){
        $bdd = $this->dbConnect(); //On appel la base de donnée
        //On rajoute 1 au signalemement
        $reponse = $bdd->prepare('UPDATE `commentaires` SET `signalement` = signalement + 1 WHERE id = ?');
        $reponse->execute(array($id_commentaire));
        return $reponse;
    }
    

    public function listeSignalement(){
        $bdd = $this->dbConnect();//On appel la base de donnée
        //On selectionne tout les commentaires qui ont recus 5 ou plus de signalement
        $reponse = $bdd->prepare("SELECT id, pseudo, commentaire, signalement FROM commentaires WHERE signalement >= '5'");
        $reponse->execute();
        return $reponse;
    } 
    
    
    public function supprimerSignalement($article_id){
        $bdd = $this->dbConnect();//On appel la base de donnée
        //On supprime commentaire avec l'id du commentaire qu'on a selectionner avec DELETE
        $rep = $bdd->prepare('DELETE FROM `commentaires` WHERE id = ?');
        $rep->execute(array($article_id));
        return $rep;  
    }
    
  
}
