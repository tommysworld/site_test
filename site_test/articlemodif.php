<!DOCTYPE html>

<html lang='fr'>
	<head>
		<meta charset="UTF-8"/>
		<title>Tommy's World - Contact</title>
		<link href="css/style.css" rel ="stylesheet" type="text/css" />
    <link href="css/placement.css" rel ="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel ="stylesheet" type="text/css" />
    <link href="css/image.css" rel ="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type='text/css'>
		<link rel="icon" type="image/png" href="img/logo-artiste-favicon.png" />
		<meta name="viewport" content="width=device-width" />
    <meta name="description" content="Page de contact avec les liens vers les pages de Tommy ainsi qu'un formulaire de contact pour des messages" />
	</head>
	<body>
		<header>
			<div class="banniere">
				<a href="index.html" class="logo"><img class="logo" src="img/logo-artiste.png" title="Retour à la page d'accueil" alt="Logo de l'artiste"/></a>
				<h1 class="banniere">Tommy's World, page de contact</h1>
				<form action="connexion.php">
				  <input type="submit" value="Deconnexion" id="deconnexion">
				</form>
			</div>
		</header>
		<div class="responsive">
      <nav class="menu">
        <ul class="menu">
          <a href="noir-blanc.html" class="menu"><li class="menu">Noir et blanc</li></a>
					<a href="aquarelle.html" class="menu"><li class="menu">Aquarelle</li></a>
					<a href="flash.html" class="menu"><li class="menu">Flash</li></a>
					<a href="croquis.html" class="menu"><li class="menu">Croquis</li></a>
					<a href="contact.html" class="menu"><li class="menu">Contact</li></a>
        </ul>
      </nav>
      <article>

		 <form name="formulaire" action="message2.php" method="POST">
          <p>Article</p>
		    <div id="conteneur-bouton">
		      <div id="nom">
                <label for="nom">*Article à modifier:</label>
				
                <?php include("inc/connexion.inc.php");	
				      $requete = 'select titre, categoriearticle, datemodificationarticle from content where idarticle ="'.$_GET ['idarticle'].'"';		

                
				//Exécution d'une requete SQL avec PDO
                      $resultat = $con->query($requete);		
	                  while ($nbutilisateurs = $resultat->fetch()) {

                // on affiche le résultat pour le visiteur		
					  echo "<table border='1'>\n";				
		              echo "<tr>\n";
		              echo "<td><p>Titre de l'article</p></td>";
                      echo "<td><p>Catégorie de l'article</p></td>";
		              echo "<td><p>Date de la dernière modification de l'article</p></td>";
		              echo "<td><p>Login de la personne ayant modifié l'article</p></td>";
		              echo "</tr>\n";
					  echo "<tr>\n";?>
					  <td><input id="titre" type="text" name="titre" value="<?php echo "".$nbutilisateurs['titre'].""?>"></td>
					  <td><input id="categoriearticle" type="text" name="categoriearticle" value="<?php echo "".$nbutilisateurs['categoriearticle'].""?>"></td>
					  <td><input id="datemodificationarticle" type="text" name="datemodificationarticle" value="<?php echo "".$nbutilisateurs['datemodificationarticle'].""?>"></td>
					  <input type="hidden" name="idarticle" value="<?php echo "".$_GET ['idarticle'].""?>">
		              <?php
		                                                            }
		              echo "</table>\n";
	            ?>
            </div>
			<input type="submit" value="Modifier" name="Modifier" id="modifier">
		</form>
      </article>
    </div>
		<footer>
			<p>Copyright Bourdain Loïc et Tommy - <a href="mention-legale.html">Mentions légales</a></p>
		</footer>
    <script src="js/formulaire.js"></script>
    <script src="js/fonction.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy0McvUlCnwFbzzzokeavKbZlN7JDXsFc&callback=initialiseMap"></script>
	</body>
</html>