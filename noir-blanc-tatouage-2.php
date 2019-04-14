<?php 
  // On ajoute un cookie d'une durée de 6 mois avec le mode httponly d'activé.
  setcookie('noirblanc2', 'noirblanc2', time() + 183*24*3600, null, null, false, true); 
?>

<!DOCTYPE html>

<html lang='fr'>
	<head>
		<meta charset="UTF-8"/>
		<title>Tommy's World - Tatouage noir et blanc 2</title>
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
				<h1 class="banniere">Tommy's World, les tatouages noirs et blancs</h1>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
				  <p>
		            <?php 
                      if (!isset($_COOKIE['noirblanc2'])) {
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
          <h2>Tatouage d'un croissant fleuri</h2>
          <div class="produit">
            <img class="produit" src="img/tatouage-noir-blanc-2.jpg" title="Tatouage d'un croissant fleuri" alt="Tatouage d'un croissant fleuri"/>
            <div class="description">
              <p>
                Un croissant de lune fleurie pour Ludivine. Merci pour ta confiance ! À bientôt pour de futurs projets !
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
              <input class="retour" type="button" value="&larr; Retour" onclick="self.location.href='noir-blanc.php'">
            </div>
          </div>
          <input type="button" class="impression" value="Imprimer" onclick="impressEcran()">
        </article>
      </main>
		</div>
		<footer>
			<p>Copyright Bourdain Loïc et Tommy - <a href="mention-legale.html">Mentions légales</a></p>
		</footer>
    <script src="js/fonction.js"></script>
	</body>
</html>