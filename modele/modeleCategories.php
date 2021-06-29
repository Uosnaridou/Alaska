<?php
include 'appelBDD.php';
//On crée la class catégorie
class categories extends appelBDD {
    
    
        //On crée une fonction jour pour la catégorie jour
        public function jour(){
            $bdd = $this->dbConnect();//On appel la base de donnée
            //On selectionne tout les articles avec la catégorie jour
            $reponse = $bdd->prepare("SELECT * FROM `articles` WHERE categorie = 'Jour'");
            $reponse->execute();
            return $reponse;
        }
    
        //On crée une fonction jour pour la catégorie nuit
        public function nuit(){
            $bdd = $this->dbConnect();//On appel la base de donnée
            //On selectionne tout les articles avec la catégorie nuit
            $reponse = $bdd->prepare("SELECT * FROM `articles` WHERE categorie = 'Nuit'");
            $reponse->execute();
            return $reponse;
        }
    
    
}
