<?php

    // connexion a la base de donnée

        try{
                $bdd = new PDO("mysql:host=localhost;dbname=kickey;charset=utf8", "root", "");
          // catch va afficher une erreur  si y en a
        }catch(Exeption $e)
        {
   
                die('Erreur : '.$e->getMessage());
        }


          
