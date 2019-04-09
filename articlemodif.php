<?php session_start();
?>	
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
				  <?php echo $_SESSION['login']; ?>
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
        <?php include("inc/connexion.inc.php");
		 if(!isset($_GET['nouvelarticle'])) {		
		?>
		<article>
		<form name="formulaire" action="message2.php" method="GET">
          <p>*Article à modifier ou supprimer:</p>				
          <?php 
		    $requete = 'select titre, categoriearticle, datemodificationarticle, contenuarticle from content where idarticle ="'.$_GET ['idarticle'].'"';		                
				//Exécution d'une requete SQL avec PDO
                      $resultat = $con->query($requete);		
	                  while ($nbutilisateurs = $resultat->fetch()) {

                // on affiche le résultat pour le visiteur		
					  echo "<table border='1'>\n";				
		              echo "<tr>\n";
		              echo "<td><p>Titre de l'article</p></td>";?>
					  <td><input id="titre" type="text" name="titre" value="<?php echo "".$nbutilisateurs['titre'].""?>"></td>
					  <?php echo "</tr>\n";
					  echo "<tr>\n";
                      echo "<td><p>Catégorie de l'article</p></td>";?>
					  <td><input id="categoriearticle" type="text" name="categoriearticle" value="<?php echo "".$nbutilisateurs['categoriearticle'].""?>"></td>		
                      <?php echo "</tr>\n";
					  echo "<tr>\n";					  
					  echo "<td><p>Contenu de l'article</p></td>";?>
					  <td><input id="contenuarticle" name="contenuarticle" value="<?php echo "".$nbutilisateurs['contenuarticle'].""?>"></td>
					  <?php echo "</tr>\n";
					  echo "<tr>\n";
		              echo "<td><p>Date de la dernière modification de l'article</p></td>";?>
					  <td><?php echo "".$nbutilisateurs['datemodificationarticle'].""?></td>
					  <?php echo "</tr>\n";
					  echo "<tr>\n";
		              echo "<td><p>Login de la personne connectée</p></td>";?>
					  <td><?php echo "".$_SESSION['login'].""?></td>
		              <?php echo "</tr>\n";
					  echo "<tr>\n";
					  echo "</table>\n";
					  ?>					  
					  					  
					  <input type="hidden" name="idarticle" value="<?php echo "".$_GET ['idarticle'].""?>">
					  <p class="bouton">
					    <input type="submit" value="Modifier" name="modifier" id="modifier" onclick="return modifyarticle()";>>
						<input type="submit" value="Supprimer" name="supprimer" id="supprimer" onclick="return deletearticle()";>		                
                      </p>	
                      <input id="retour2" class="retour" type="button" value="&larr; Retour à la page de modification des articles" onclick="self.location.href='backoffice.php'">					  
                      </form>
                      </article>
		              <?php
		                                                            }
		              }
	                  ?>						  
				          <?php				
				            if(isset($_GET['nouvelarticle'])) {
				          ?>
				          <article>					    
				            <form id="ajoutarticle" name="ajoutarticle" method="GET" action="message2">			
                            <p>Nouvel article</p>	
				  
				            <?php
                            // on affiche le résultat pour le visiteur		
					          echo "<table border='1'>\n";				
		                      echo "<tr>\n";
		                      echo "<td><p>Titre de l'article</p></td>";?>
							  <td><input id="titre" type="text" name="titre" value=""></td>
							  <?php echo "</tr>\n";
							  echo "<tr>\n";
                              echo "<td><p>Catégorie de l'article</p></td>";?>
							  <td><input id="categoriearticle" type="text" name="categoriearticle" value=""></td>
		                      <?php echo "</tr>\n";
							  echo "<tr>\n";
							  echo "<td><p>Contenu de l'article</p></td>";?>
							  <td><textarea id="contenuarticle" name="contenuarticle" value=""></textarea></td>							  							  
		                      <?php echo "</tr>\n";				  			    										   											   
		                            echo "</table>\n";
	                          ?>	
					          <p class="bouton">
		                        <input type="submit" value="Ajouter" name="ajouter" id="ajouter" onclick="return insertarticle()">
						        <input id="retour" class="retour" type="button" value="&larr; Retour à la page de modification des articles" onclick="self.location.href='backoffice.php'">
						      </p>
						    </form>
                          </article>
		                  <?php											   											   
												   }
	                      ?>							  						  				            				          

		<footer>
			<p>Copyright Bourdain Loïc et Tommy - <a href="mention-legale.html">Mentions légales</a></p>
		</footer>
        <script src="js/formulaire.js"></script>
        <script src="js/fonction.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy0McvUlCnwFbzzzokeavKbZlN7JDXsFc&callback=initialiseMap"></script>
	</body>
</html>