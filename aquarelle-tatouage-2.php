<?php 
  setcookie('aquarelle2', 'aquarelle2', time() + 183*24*3600, null, null, false, true); 
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
				<a href="index.php" class="logo"><img class="logo" src="img/logo-artiste.png" title="Retour à la page d'accueil" alt="Logo de l'artiste"/></a>
				<h1 class="banniere">Tommy's World, les tatouages aquarelles</h1>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
				  <p>
	                <?php 
                      if (!isset($_COOKIE['aquarelle2'])) {
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
          <h2>Tatouage de mandala</h2>
          <div class="produit">
            <img class="produit" src="img/tatouage-aquarelle-2.jpg" title="Tatouage de mandala" alt="Tatouage de mandala"/>
            <div class="description">
              <p>
                Petit Tattoo du week-end, entre mandala et aquarelle. Merci beaucoup Audrey pour ce projet et pour ta confiance !
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
		<footer>
			<p>Copyright Bourdain Loïc et Tommy - <a href="mention-legale.html">Mentions légales</a></p>
		</footer>
    <script src="js/fonction.js"></script>
    <script>dateFichier(); largeurNav();</script>
	</body>
</html>