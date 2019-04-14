<?php
		
//paramètres de connexion avec PDO
$pdo_options[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;//afficher les erreurs
$pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND]= 'SET NAMES utf8';//afficher les erreurs
$loginserveur = "id9158625_root";
$serveur = "localhost";
$mdpserveur = "admintommysworld";
$dbname = "id9158625_tommy_s_world";

//connexion serveur avec PDO (si BDD inexistante)
$con = new PDO('mysql:host='.$serveur.';dbname='.$dbname, $loginserveur , $mdpserveur, $pdo_options);
?>