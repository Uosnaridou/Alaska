<?php
//On crée la class catégorie
class commentaires extends appelBDD {
    
    
        public function commentaire($article_id){
            $bdd = $this->dbConnect();//On appel la base de donnée
            //On recupere toute les données du commentaire 
            $rep = $bdd->prepare('SELECT id, pseudo, commentaire, signalement FROM commentaires WHERE id_article = ?');
            $rep->execute(array($article_id));
            return $rep;
        }
    
    
        public function ajoutCommentaire($article_id, $pseudo,$commentaire ){
            $bdd = $this->dbConnect();//On appel la base de donnée
            $req = $bdd->prepare('INSERT INTO commentaires(pseudo, commentaire, id_article) VALUES(:pseudo, :commentaire, :id_article)');
            $req->execute(array(
            'id_article' => $article_id,
            'pseudo' => $pseudo,
            'commentaire' => $commentaire
            ));
            $req->closeCursor();
            return $req; 
		}     

                
}
