<?php 
  // On ajoute un cookie d'une durée de 6 mois avec le mode httponly d'activé.
  setcookie('croquis1', 'croquis1', time() + 183*24*3600, null, null, false, true); 
?>

<!DOCTYPE html>

<html lang='fr'>
	<head>
		<meta charset="UTF-8"/>
		<title>Tommy's World - Croquis 1</title>
		<link href="css/style.css" rel ="stylesheet" type="text/css" />
        <link href="css/placement.css" rel ="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel ="stylesheet" type="text/css" />
        <link href="css/image.css" rel ="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type='text/css'>
		<link rel="icon" type="image/png" href="img/logo-artiste-favicon.png" />
		<meta name="viewport" content="width=device-width" />
		<meta name="description" content="Page sur un croquis de fleur bleue ciel réalisé par l'artiste tatoueur Tommy, sur Orléans et ses environs" />
	</head>
	<body>
		<header>
			<div class="banniere">
				<?php include "inc/logo.inc.php" ?>
				<h1 class="banniere">Tommy's World - Croquis 1</h1>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
				  <p>
                    <?php 
                      if (!isset($_COOKIE['croquis1'])) {
                        echo 'Bienvenue';
                      } else {};
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
          <h2>
		    <?php include("inc/connexion.inc.php");	
		      $requete = 'select titre, contenuarticle from content where idarticle="3"';		
              $resultat = $con->query($requete);
			  while ($nbutilisateurs = $resultat->fetch()) {
				  echo $nbutilisateurs['titre'];	  
		    ?>		  
		  </h2>
          <div class="produit">
            <img class="produit" src="img/tatouage-croquis-1.jpg" title="Croquis de tatouages avec une femme et un oiseau" alt="Croquis de tatouages avec une femme et un oiseau"/>
            <div class="description">
              <p>
				<?php 
				    echo $nbutilisateurs['contenuarticle'];
			                                                   }	  
		        ?>
              </p>
              <p>
                Si tu es intéressé, n'hésite pas à passer par ma page facebook ou à me contacter via ma page contact.
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
              <input class="retour" type="button" value="&larr; Retour" onclick="self.location.href='croquis.php'">
            </div>
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