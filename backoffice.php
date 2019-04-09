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
				<h1 class="banniere">Tommy's World, liste des articles</h1>
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
      <form id="listearticle" action="articlemodif.php">
      <article>

        <?php include("inc/connexion.inc.php");
        echo "<p>Liste des articles </p>";
		
		//nb de lignes contenu dans résultat

        echo "<table border='1'>\n";
		echo "<tr>\n";
		echo "<td><p>Titre de l'article</p></td>";
        echo "<td><p>Catégorie de l'article</p></td>";
		echo "<td><p>Date de la dernière modification de l'article</p></td>";
		echo "<td><p>Contenu de l'article</p></td>";
		echo "<td><p>Login de la personne ayant modifié l'article</p></td>";
		echo "<td><p>Lien pour modifier ou supprimer l'article</p></td>";
		echo "</tr>\n";
		
        $requete = "select titre, categoriearticle, idarticle, datemodificationarticle, nomusermodificationarticle, contenuarticle from content";			
        $resultat = $con->query($requete);
		
	    while ($nbutilisateurs = $resultat->fetch()) {

    // on affiche le résultat pour le visiteur			
	    $test=$nbutilisateurs['idarticle'];
		$url="articlemodif.php?idarticle=$test";
		echo "<tr>\n";
		echo "<td>".$nbutilisateurs['titre']. "</td>\n";
        echo "<td>".$nbutilisateurs['categoriearticle']. "</td>\n";
		echo "<td>".$nbutilisateurs['contenuarticle']. "</td>\n";
		echo "<td>".$nbutilisateurs['datemodificationarticle']. "</td>\n";
		echo "<td>".$nbutilisateurs['nomusermodificationarticle']. "</td>\n";
        echo '<td>'.'<a href="'.$url.'">lien pour modifier ou supprimer l article</td>'.'</a>';
		echo "</tr>\n";
		}
		echo "</table>\n";			;
		?>
      </article>
      <p class="bouton">
	        <input id="nouvelarticle" type="submit" name="nouvelarticle" value="Créer un article">
			<input id="lienpagemessage" class="retour" type="button" value="Lien vers la page message" onclick="self.location.href='message.php'">
	  </p>
	  </form>
    </div>
		<footer>
			<p>Copyright Bourdain Loïc et Tommy - <a href="mention-legale.html">Mentions légales</a></p>
		</footer>
    <script src="js/formulaire.js"></script>
    <script src="js/fonction.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy0McvUlCnwFbzzzokeavKbZlN7JDXsFc&callback=initialiseMap"></script>
	</body>
</html>