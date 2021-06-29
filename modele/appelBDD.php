<?php 
class appelBDD{ 
//On se connecte a la base de donnée 
            public function dbConnect(){
                try{
                    $bdd = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8','root','');
                }
                catch(Exception $e){
                    die('Erreur : '.$e->getMessage());
                }        
                
                return $bdd;
    }
}
