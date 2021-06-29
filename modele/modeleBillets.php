<?php
include 'appelBDD.php';
//On crée la class qui va gérée les billets
class billets extends appelBDD {
    
     
            public function billet($id_article){
                $bdd = $this->dbConnect();//On appel la base de donnée
                // Récupération du billet
                $reponse = $bdd->prepare('SELECT id, titre, date, categorie, message FROM articles WHERE id = ?');
                $reponse->execute(array($id_article));
                return $reponse;
            }
    
    
            public function creationBillet($titre,$date,$cate,$message){
                $bdd = $this->dbConnect();//On appel la base de donnée            
                //On les inseres dans la base de donnée avec INSERT INTO
                $req = $bdd->prepare('INSERT INTO articles(titre, date, categorie, message) VALUES(:titre, :date, :categorie, :message)');
                $req->execute(array(
                'titre' => $titre,
                'date' => $date,
                'categorie' => $cate,
                'message' => $message
                ));
            }
      
 
            public function listeBillets(){
                $bdd = $this->dbConnect();//On appel la base de donnée
                // Récupération du billet
                $reponse = $bdd->prepare('SELECT id, titre, date, categorie, message FROM articles');
                $reponse->execute();
                return $reponse;
            }
        
    
            public function modificationBillet($article_id,$titre,$date,$categorie,$message){
                $titre;
                $date;
                $categorie;
                $message;
                $bdd = $this->dbConnect();//On appel la base de donnée
                //On crée la fonction pour modifier la base de donnée avec UPDATE
                $rep = $bdd->prepare("UPDATE `articles` SET `message`= '" . $message . "' , `titre`= '" . $titre . "' , `date`= '" . $date . "' , `categorie`= '" . $categorie  . "' WHERE id = ?");
                $rep->execute(array($article_id));

            }
       
    
    
            public function suppressionBillet($article_id){
                $bdd = $this->dbConnect();//On appel la base de donnée 
                //On crée la fonction pour supprimer un article dans la base de donnée avec DELETE  
                $reponse = $bdd->prepare('DELETE FROM `articles` WHERE id = ?');
                $reponse->execute(array($article_id));
                return $reponse;
            }


    
}
