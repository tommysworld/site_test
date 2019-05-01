<?php 
  // On ajoute un cookie d'une durée de 6 mois avec le mode httponly d'activé.
  setcookie('croquis', 'croquis', time() + 183*24*3600, null, null, false, true); 
?>

<!DOCTYPE html>

<html lang='fr'>
	<head>
		<meta charset="UTF-8"/>
		<title>Tommy's World - Croquis</title>
		<link href="css/style.css" rel ="stylesheet" type="text/css" />
        <link href="css/placement.css" rel ="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel ="stylesheet" type="text/css" />
        <link href="css/image.css" rel ="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type='text/css'>
		<link rel="icon" type="image/png" href="img/logo-artiste-favicon.png" />
		<meta name="viewport" content="width=device-width" />
        <meta name="description" content="Page récapitulant les croquis pour de possibles tatouages ou des dessins personnels réalisés par Tommy" />
	</head>
	<body>
		<header>
			<div class="banniere">
				<a href="index.php" class="logo"><img class="logo" src="img/logo-artiste.png" title="Retour à la page d'accueil" alt="Logo de l'artiste"/></a>
				<h1 class="banniere">Tommy's World, les croquis de Tommy</h1>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
				  <p>
		            <?php 
                      if (!isset($_COOKIE['croquis'])) {
	                    echo 'Bienvenue';
                                             }
                        else {};
                    ?>
		          </p>
				</form>
			   
			</div>
		</header>
		<div class="responsive">
      <nav class="menu">
        <ul class="menu">
          <a href="noir-blanc.php" class="menu"><li class="menu">Noir et blanc</li></a>
					<a href="aquarelle.php" class="menu"><li class="menu">Aquarelle</li></a>
					<a href="flash.php" class="menu"><li class="menu">Flash</li></a>
					<a href="croquis.php" class="menu"><li class="menu">Croquis</li></a>
					<a href="contact.php" class="menu"><li class="menu">Contact</li></a>
        </ul>
      </nav>
      <main>
        <article>
          <h2>Croquis réalisés</h2>
          <div class="ligne">
            <div class="article">
              <a href="croquis-tatouage-1.php" class="article"><img class="article" src="img/tatouage-croquis-1.jpg" title="Plus d'informations en cliquant" alt="Croquis d'un flash avec femme et oiseau"/></a>
              <p class="article">
			    <?php include("inc/connexion.inc.php");	
		          $requete = 'select titre from content where idarticle="3"';		
                  $resultat = $con->query($requete);
			      while ($nbutilisateurs = $resultat->fetch()) {
				    echo $nbutilisateurs['titre'];
			                                                   }	  
		        ?>			  
			  </p>
            </div>
            <div class="article">
              <a href="croquis-tatouage-2.php" class="article"><img class="article" src="img/tatouage-croquis-2.jpg" title="Plus d'informations en cliquant" alt="Croquis de multiple flashs"/></a>
              <p class="article">
		        <?php include("inc/connexion.inc.php");	
		          $requete = 'select titre from content where idarticle="3"';		
                  $resultat = $con->query($requete);
			      while ($nbutilisateurs = $resultat->fetch()) {
		            echo $nbutilisateurs['titre'];
			                                                   }	  
		        ?>				  
			  </p>
            </div>
          </div>
          <div class="ligne">
            <div class="article">
              <a href="croquis-tatouage-2.php" class="article"><img class="article" src="img/tatouage-croquis-2.jpg" title="Plus d'informations en cliquant" alt="Croquis de multiple flashs"/></a>
              <p class="article">
			  	<?php include("inc/connexion.inc.php");	
		          $requete = 'select titre from content where idarticle="3"';		
                  $resultat = $con->query($requete);
			      while ($nbutilisateurs = $resultat->fetch()) {
				    echo $nbutilisateurs['titre'];
			                                                   }	  
		        ?>	
			  </p>
            </div>
            <div class="article">
              <a href="croquis-tatouage-1.php" class="article"><img class="article" src="img/tatouage-croquis-1.jpg" title="Plus d'informations en cliquant" alt="Croquis d'un flash avec femme et oiseau"/></a>
              <p class="article">
		        <?php include("inc/connexion.inc.php");	
		          $requete = 'select titre from content where idarticle="3"';		
                  $resultat = $con->query($requete);
			      while ($nbutilisateurs = $resultat->fetch()) {
		            echo $nbutilisateurs['titre'];
			                                                   }	  
		        ?>	
			  </p>
            </div>
          </div>
        </article>
      </main>
    </div> 
		<footer>
			<p>Copyright Bourdain Loïc et Tommy - <a href="mention-legale.html">Mentions légales</a></p>
		</footer>
    <script src="js/fonction.js"></script>
	</body>
</html>