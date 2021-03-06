<?php 
  setcookie('aquarelle', 'aquarelle', time() + 183*24*3600, null, null, false, true); 
?>

<!DOCTYPE html>

<html lang='fr'>
	<head>
		<meta charset="UTF-8"/>
		<title>Tommy's World - Aquarelle</title>
		<link href="css/style.css" rel ="stylesheet" type="text/css" />
        <link href="css/placement.css" rel ="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel ="stylesheet" type="text/css" />
        <link href="css/image.css" rel ="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type='text/css'/>
		<link rel="icon" type="image/png" href="img/logo_artiste_favicon.png" />
		<meta name="viewport" content="width=device-width" />
        <meta name="description" content="Page récapitulant les tatouages avec un effet aquarelle réalisés par l'artiste tatoueur Tommy ainsi que son univers, de son world, sur Orléans et ses environs" />
	</head>
	<body>
		<header>
			<div class="banniere">
				<?php include "inc/logo.inc.php" ?>
				<h1 class="banniere">Tommy's World, les tatouages aquarelles</h1>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
				  <p>
                    <?php 
                      if (!isset($_COOKIE['aquarelle'])) {
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
          <h2>Réalisations aquarelles</h2>
		    <div class="categorie">
              <a href="aquarelle-tatouage-1.php" class="article"><img class="categorie1" src="img/tatouage-aquarelle-1.jpg" title="Plus d'informations en cliquant" alt="Tatouage de fleur bleue"/></a>					
			  <a href="aquarelle-tatouage-2.php" class="article"><img class="categorie2" src="img/tatouage-aquarelle-2.jpg" title="Plus d'informations en cliquant" alt="Tatouage d'un mandala"/></a>
			</div>	 
			<div class="lignecategorie">
			  <p class="categorie1">
			    <?php include("inc/connexion.inc.php");	
                  $requete = 'select titre from content where idarticle>0 and idarticle<3';	
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
               <a href="aquarelle-tatouage-nouveaux-articles.php" class="article"><img class="article" src="img/tatouage-aquarelle-1.jpg" title="Plus d'informations en cliquant" alt="Tatouage de fleur bleue"/></a>					
		    </div>	 
			<div class="ligne">
			  <p class="article">
                Nouveaux articles aquarelles tatouages                           						
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