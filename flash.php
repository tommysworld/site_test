<?php 
  // On ajoute un cookie d'une durée de 6 mois avec le mode httponly d'activé.
  setcookie('flash', 'flash', time() + 183*24*3600, null, null, false, true); 
?>

<!DOCTYPE html>

<html lang='fr'>
	<head>
		<meta charset="UTF-8"/>
		<title>Tommy's World - Flash</title>
		<link href="css/style.css" rel ="stylesheet" type="text/css" />
        <link href="css/placement.css" rel ="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel ="stylesheet" type="text/css" />
        <link href="css/image.css" rel ="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type='text/css'>
		<link rel="icon" type="image/png" href="img/logo-artiste-favicon.png" />
		<meta name="viewport" content="width=device-width" />
        <meta name="description" content="Page récapitulant les tatouages flashs realisés par Tommy" />
	</head>
  <body>
    <header>
			<div class="banniere">
				<?php include "inc/logo.inc.php" ?>
				<h1 class="banniere">Tommy's World, les tatouages flashs</h1>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
				  <p>
            <?php 
              if (!isset($_COOKIE['flash'])) {
                echo 'Bienvenue';
              }
              else {};
            ?>
          </p>
				</form>
			</div>
		</header>
    <div class="responsive">
      <?php
        include "inc/menu.inc.php"
      ?>
      <main>
        <article>
          <h2>Réalisations flash</h2>
		    <div class="categorie">
              <a href="flash-tatouage-1.php" class="article"><img class="categorie1" src="img/tatouage-flash-1.jpg" title="Plus d'informations en cliquant" alt="Tatouage de fleur"/></a>					
			  <a href="flash-tatouage-2.php" class="article"><img class="categorie2" src="img/tatouage-flash-2.jpg" title="Plus d'informations en cliquant" alt="Tatouage d'un flash harry potter"/></a>
			</div>	 
			<div class="lignecategorie">
			  <p class="categorie1">
			    <?php include("inc/connexion.inc.php");	
                  $requete = 'select titre from content where idarticle>4 and idarticle<7';	
                  $resultat = $con->query($requete);
                  while ($nbutilisateurs = $resultat->fetch()) {						
		            echo $nbutilisateurs['titre'];
				?>                                						
                </p>					  					                 
                <p class="categorie2">					
				  <?php  							  
				    };	
                  ?>
			    </p>								  
			</div>	      
            <div class="categorie">
              <a href="flash-tatouage-nouveaux-articles.php" class="article"><img class="categorie1" src="img/tatouage-flash-1.jpg" title="Plus d'informations en cliquant" alt="img/tatouage-flash-1.jpg"/></a>					
		    </div>	 
			<div class="ligne">
			  <p class="article">
                Nouveaux articles tatouages flash                           						
              </p>					  					                 							  
		    </div>	
        </article>
      </main>
    </div>
    <?php
      include "inc/footer.inc.php"
    ?>
    <script src="js/fonction.js"></script>
	</body>
</html>