<?php
class routeur {
    
    function __construct() {
        session_start();
    }
    

    public function pages(){
        
        if (isset($_GET['a'])) {       
            if ( $_GET['a'] == 'billet'){
                require 'controller/controllerArticles.php';
                $articles = new controllerArticles();
                $commentaires = $articles->billet();
            }

        }else if(isset($_GET['admin'])){ 
            require 'controller/controllerAdmin.php';
            $post = new controllerAdmin();
            
           if ( $_GET['admin'] == 'connexion'){
               $connecte = $post->connexion();
               
           }else if($_GET['admin'] == 'deconnection'){
                $deconnecte = $post->deconnection();

           }else if($_GET['admin'] == 'creationBillets'){
                $creer = $post->creationBillets();

           }else if($_GET['admin'] == 'listeBillets'){
                $liste = $post->listeBillets();

           }else if($_GET['admin'] == 'modificationBillets'){
                $modifier = $post->modificationBillets();

           }else if($_GET['admin'] == 'suppressionBillets'){
                $supprimer = $post->suppressionBillets();
           }
            
            
        }else if(isset($_GET['signalement'])) {
            require 'controller/controllerSignalement.php';
            $signaler = new signalement();
            
            if ($_GET['signalement'] == 'listeSignalement'){
                $listeSignaler = $signaler->listeSignalement();

            }else if($_GET['signalement'] == 'ajoutSignalement'){
                $ajoutSignaler = $signaler->ajoutSignalement();

            }else if($_GET['signalement'] == 'supprimerSignalement'){
                $supprimerSignaler = $signaler->supprimerSignalement();

            }

            
        }else if(isset($_GET['c'])){
            
            if ($_GET['c'] == 'contact'){
                require 'controller/controllerContact.php';
                $appel = new controllerContact();
                $contact = $appel->email();
            }
            
            
        }else if (isset($_GET['categorie'])){
            require 'controller/controllerCategories.php';
            $categorie = new controllerCategories();
            
                if ($_GET['categorie'] == 'jour'){
                    $categorieJour = $categorie->jour();

                }else if($_GET['categorie'] == 'nuit'){
                    $categorieNuit = $categorie->nuit();

                }
            
        }else{ 
            
            require 'controller/controllerArticles.php';
            $articles = new controllerArticles();
            $reponse = $articles->accueil();  
        }       



    }
}

$appel = new routeur();
$root = $appel->pages();