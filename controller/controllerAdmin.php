<?php
class controllerAdmin{
    
    public function connexion(){
        require 'modele/modeleAdmin.php';
        $connecte = new admin();
        $reponse = $connecte->info_admin();
        $donnees = $reponse-> fetch();
        $login_valide = $donnees['username'];
        $pwd_valide = $donnees['password'];
        
            if ($_POST) {            
                //On fais une condition qui dit que si les deux champs sont remplis 
                if (isset($_POST['username']) && isset($_POST['password'])) {
                    $password_formulaire = $_POST['password'];
                    //Et que les deux champs sont egal au pseudo et au mot de passe
                    if ($login_valide == htmlspecialchars($_POST['username']) && $pwd_valide == sha1($password_formulaire)) {
                        $_SESSION['username'] = htmlspecialchars($_POST['username']);
                        $_SESSION['password'] = htmlspecialchars($_POST['password']);
                        require 'vue/vueChoix.php';//On ramene a la vue que l'administrateur
                    }else{
                        //Sinon on affiche un message comme quoi seul l'utilisateur peux ce connecter
                        echo "Vous n'avez pas les droits suffisants pour accéder à cette page. Vous devez disposer d'une autorisation pour effectuer cette action en qualité d'administrateur du site.";
                        require 'vue/vueConnexion.php';//On redirige vers la bonne vue
	               }
                }
    
            }else if(isset ($_SESSION['username']) && isset($_SESSION['password'])){
                require 'vue/vueChoix.php';
            }else{
                require 'vue/vueConnexion.php';//On redirige vers la bonne vue
            }
    }
    
    
    public function deconnection(){
        session_destroy ();//on detruit notre session
        // On redirige le visiteur vers la page d'accueil
        header ('location: index.php');
    }
    
    public function creationBillets(){
        require 'modele/modeleBillets.php';//On appel le bon modele
        $billets = new billets();//On crée un objet
        
            if (isset($_POST['titre']) && isset($_POST['date']) && isset($_POST['categorie']) && isset($_POST['message'])){
                $titre = $_POST['titre']; 
                $date = $_POST['date']; 
                $cate = $_POST['categorie']; 
                $message = $_POST['message']; 
                $req = $billets->creationBillet($titre,$date,$cate,$message);//On appel la bonne fonction
                header('Location: index.php');       
            }else{ 
                require 'vue/vueCreation.php';//On redirige vers la bonne vue
            }
    }
    
    
    public function listeBillets(){
        require 'modele/modeleBillets.php';//On appel le bon modele
        $billet = new billets();//On crée un objet
        $reponse = $billet->listeBillets();//On crée un objet
        require 'vue/listeBillets.php';//On redirige vers la bonne vue
    }
    
    
    public function modificationBillets(){
        require 'modele/modeleBillets.php';//On appel le bon modele
        $post = new billets(); //On crée un objet
        $id= $_GET['articles'];
        $reponse = $post->billet($id);//On appel les bonnes fonctions
        
            if(!empty($_POST)){
                $titre = $_POST['titre'];  
                $date = $_POST['date']; 
                $categorie = $_POST['categorie'];   
                $message = $_POST['message'];
                $rep = $post->modificationBillet($id,$titre,$date,$categorie,$message);
                header('Location: index.php');       
            }else{ 
                require 'vue/vueModification.php';//On redirige vers la bonne vue
            }
    }  
    
    public function suppressionBillets(){
        require 'modele/modeleBillets.php';//On appel le bon modele
        $supp = new billets();//On crée un objet
        $id= $_GET['articles'];
        $reponse = $supp->suppressionBillet($id);//On appel la bonne fonction
        $reponse = $supp->listeBillets($id);
        require 'vue/listeBillets.php';//On redirige vers la bonne vue
    }     
    
}
