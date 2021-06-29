<?php
include 'appelBDD.php';
//On crée la class qui va gérée les billets
class admin extends appelBDD {
    
            public function info_admin(){
                $bdd = $this->dbConnect();//On appel la base de donnée
                $reponse = $bdd->prepare('SELECT * FROM users');//selectionne tout les champs de users
                $reponse->execute();
                return $reponse;     
            }

}