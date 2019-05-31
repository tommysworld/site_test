<?php 
  setcookie('aquarelle2', 'aquarelle2', time() + 183*24*3600, null, null, false, true); 
?>

<!DOCTYPE html>

<html lang='fr'>
	<head>
		<meta charset="UTF-8"/>
		<title>Tommy's World, Un tatouage aquarelle de mandala</title>
		<link href="css/style.css" rel ="stylesheet" type="text/css" />
        <link href="css/placement.css" rel ="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel ="stylesheet" type="text/css" />
        <link href="css/image.css" rel ="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type='text/css'/>
		<link rel="icon" type="image/png" href="img/logo-artiste-favicon.png" />
		<meta name="viewport" content="width=device-width" />
		<meta name="description" content="Un tatouage aquarelle de mandala réalisé l'artiste tatoueur Tommy, sur Orléans et ses environs" />
	</head>
	<body>
		<header>
			<div class="banniere">
            <?php include "inc/logo.inc.php" ?>
		      <h1 class="banniere">Tommy's World, Un tatouage aquarelle de mandala</h1>
				<form action="connexion.php">
                  <input type="submit" value="Connexion" id="connexion"/>
                  <p>
                  <?php 
                    if (!isset($_COOKIE['aquarelle2'])) {
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
		      $requete = 'select titre, contenuarticle from content where idarticle="2"';		
              $resultat = $con->query($requete);
			  while ($nbutilisateurs = $resultat->fetch()) {
				  echo $nbutilisateurs['titre'];  
		    ?>
		  </h2>
          <div class="produit">
            <img class="produit" src="img/tatouage-aquarelle-2.jpg" title="Tatouage de mandala" alt="Tatouage de mandala"/>
            <div class="description">
              <p>
				<?php
				    echo $nbutilisateurs['contenuarticle'];
			                                                   }	  
		        ?>
              </p>
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
          </div>
        </article>
      </main>
		</div>
    <p id="dateFichier"></p>
    <p id="largeurNavigateur"></p>
    <?php
      include "inc/footer.inc.php"
    ?>
    <script src="js/fonction.js"></script>
    <script>dateFichier(); largeurNav();</script>
	</body>
</html>