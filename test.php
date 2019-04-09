<?php include("inc/connexion.inc.php");
  // Nom du fichier et delimiteur entre chaque entrées
  $chemin = 'message.csv';
  $delimiteur = ';'; // Pour une tabulation, $delimiteur = "t";	
  $fichier_csv = fopen($chemin, 'w+');			  
  $file = fopen('message.csv', 'w');
  fprintf($fichier_csv, chr(0xEF).chr(0xBB).chr(0xBF));
  
  // On affiche une fois l'entête sans boucle
  $requete = "select usermessage, telephone, message, email, datereceptionmessage from message";			
  $resultat = $con->query($requete);
		
  while ($nbutilisateurs = $resultat->fetch()) {
  // Les lignes de variables du tableau
  $export[] = array($nbutilisateurs["usermessage"], $nbutilisateurs["telephone"], $nbutilisateurs["message"], $nbutilisateurs["email"], $nbutilisateurs["datereceptionmessage"]);
			  }

  
  // Boucle foreach sur chaque ligne du tableau
  // Boucle pour se déplacer dans les tableaux
  foreach($export as $resultat){
  // chaque ligne en cours de lecture est insérée dans le fichier
  // les valeurs présentes dans chaque ligne seront séparées par $delimiteur
  
  fputcsv($fichier_csv, $resultat, $delimiteur);
                                                 }			    
  // fermeture du fichier csv
  fclose($fichier_csv);
  header("Content-Type: application/force-download" );
  header("Content-Length: ".filesize($chemin));
  header("Content-Disposition: attachment; filename=".$chemin);
  readfile($chemin);

		?>