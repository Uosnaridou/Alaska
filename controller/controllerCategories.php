<?php
class controllerCategories{
    

    public function jour(){
        require 'modele/modeleCategories.php';//On appel le bon modele
        $jour = new categories;//On crée un nouvel objet
        $reponse = $jour->jour();//On appel la bonne fonction
        require 'vue/vueCategories.php';//On redigire vers la bonne vue
    }
    
    public function nuit(){
        require 'modele/modeleCategories.php';
        $nuit = new categories();//On crée un nouvel objet
        $reponse = $nuit->nuit();//On appel la bonne fonction
        require 'vue/vueCategories.php';//On redigire vers la bonne vue 
    }
    
   
}
