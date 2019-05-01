<?php
		
  $loginserveur = "root";
  $serveur = "localhost";
  $mdpserveur = "";
  $dbname = "cnam_test";
  
  //paramètres de connexion avec PDO
  $pdo_options[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;//afficher les erreurs
  $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND]= 'SET NAMES utf8';//afficher les erreurs

  //connexion serveur avec PDO (si BDD inexistante)
  $con = new PDO('mysql:host='.$serveur.';dbname='.$dbname, $loginserveur , $mdpserveur, $pdo_options);
