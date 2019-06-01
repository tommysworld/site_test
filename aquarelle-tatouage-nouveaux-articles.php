<?php 
  setcookie('aquarellenew', 'aquarellenew', time() + 183*24*3600, null, null, false, true); 
?>

<!DOCTYPE html>

<html lang='fr'>
	<head>
		<meta charset="UTF-8"/>
		<title>Tommy's World - Tatouage aquarelle 2</title>
		<link href="css/style.css" rel ="stylesheet" type="text/css" />
        <link href="css/placement.css" rel ="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel ="stylesheet" type="text/css" />
        <link href="css/image.css" rel ="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type='text/css'>
		<link rel="icon" type="image/png" href="img/logo-artiste-favicon.png" />
		<meta name="viewport" content="width=device-width" />
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
                      if (!isset($_COOKIE['aquarellenew'])) {
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
        <?php include("inc/connexion.inc.php");
          echo "<h2>Liste des nouveaux tatouages aquarelles</h2>";		
		  //nb de lignes contenu dans résultat		
          $requete = "select content.titre, content.categoriearticle, content.contenuarticle from content where idarticle>8 and categoriearticle='aquarelle'";			
          $resultat = $con->prepare($requete);
		  $resultat = $con->query($requete);		
	      while ($nbutilisateurs = $resultat->fetch()) {			
            // on affiche le résultat pour le visiteur			
		    echo "<h2>".$nbutilisateurs['titre']."</h2>"."\n";
		    ?>
		    <img class="article" src="img/tatouage-noir-blanc-2.jpg" title="Tatouage d'un croissant fleuri" alt="Tatouage d'un croissant fleuri"/>
		    <?php 
		      echo "<p>".$nbutilisateurs['contenuarticle']."</p>\n";		                                                }
		    ?>
            <p>
              Si tu veux plus d'informations, n'hésite pas à passer par ma page facebook ou à me contacter via ma page contact.
            </p>
            <p class="lien">
              Facebook : <a href="https://www.facebook.com/Tommys-World-1445491105697607/" target="_blank">Tommy's World</a>
            </p>
            <p class="lien">
              Instagram : <a href="https://www.instagram.com/tom_ily/" target="_blank">@tom_ily</a>
            </p>
            <p class="lien">
              Contact : <a href="contact.php">Page contact</a>
            </p>
            <p>               
			  #tattoo #tattooer #tatouage #frenchinked #frenchtattoo #ink #inkstagram #tattooart #tattoo_artwork #blackart 
              #blackworktattoo #blackwork #blacktattoo #instadaily #picofday #watercolor #watercolortattoo #mandalaart #mandalas 
              #mandalatattoo #dots #dotwork #lineworktattoo #newtat #newpost #encrés #orleanstattoo
            </p>
            <input class="retour" type="button" value="&larr; Retour" onclick="self.location.href='aquarelle.php'">
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