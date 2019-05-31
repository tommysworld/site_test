<?php 
  // On ajoute un cookie d'une durée de 6 mois avec le mode httponly d'activé.
  setcookie('accueil', 'accueil', time() + 183*24*3600, null, null, false, true); 
?>

<!DOCTYPE html>

<html lang='fr'>
	<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139416015-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-139416015-1');
    </script>
		<meta charset="UTF-8"/>
		<title>Tommy's World - des tatouages sur Orléans</title>
		<link href="css/style.css" rel ="stylesheet" type="text/css" />
        <link href="css/placement.css" rel ="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel ="stylesheet" type="text/css" />
        <link href="css/image.css" rel ="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type='text/css' />
		<link rel="icon" type="image/png" href="img/logo-artiste-favicon.png" />
		<meta name="viewport" content="width=device-width" />
        <meta name="description" content="Page d'accueil présentant les tatouages, tatoos, flash, croquis; en couleur ou en noir et blanc; de l'artiste tatoueur Tommy ainsi que son univers, de son world, sur Orléans et ses environs" />
	</head>
	<body>
		<header>
			<div class="banniere">
				<?php include "inc/logo.inc.php" ?>
				<div class="img-banniere"></div>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
				  <p>
                    <?php 
                      if (!isset($_COOKIE['accueil'])) {
                        echo 'Bienvenue';
                                                     }
                      else {				                  
			                                           };			 
                    ?>
                  </p>
				</form>
			</div>
		</header>
		<h1>Tommy's World, un nouveau monde de tatouages à Orléans</h1>
    <div class="responsive">
      <?php
        include "inc/menu.inc.php"
      ?>
      <main>
        <div class="articles">
          <input type="button" class="afficher" id="boutonAffiche" value="Afficher plan du site" onclick="displayResume()"/>
          <article id="resume">
            <h2>Plan du site</h2>
            <ul>
              <li>
                Page <a href="noir-blanc.php">Noir et blanc</a> : Présentation de tatouages noir et blanc réalisés par mes soins.
              </li>
              <li>
                Page <a href="aquarelle.php">Aquarelle</a> : Présentation de tatouages réalisés avec un effet aquarelle.
              </li>
              <li>
                Page <a href="flash.php">Flash</a> : Présentation de tatouages proposés et réalisés.
              </li>
              <li>
                Page <a href="croquis.php">Croquis</a> : Exemple de croquis que j'ai réalisé et que je veux partager ; pouvant donner lieu à des flashs.
              </li>
              <li>
                Page <a href="contact.php">Contact</a> : Page permettant de voir mes pages (Facebook, Instagram, ...) et de m'envoyer un message pour prendre rendez-vous ou autre.
              </li>
            </ul>
          </article>
          <article>
            <h2>Présentation de l'artiste</h2>
            <div class="presentation">
              <img class="profil" src="img/photo-profil.jpg" title="Portrait de Tommy" alt="Photo de l'artiste"/>
              <div class="paragraphe">
                <p>Hello</p>
                <p>
                  Ce site a pour vocation de partager mes idées, croquis, projets et tatouages avec toi.   
                  Il te permet aussi de prendre contact avec moi si tu veux des informations ou même aller au bout des choses et prendre rendez-vous.
                </p>
                <p class="outro">Tu peux m'appeller Tommy et bienvenue dans mon monde d'art et surtout de tatouages.</p>
              </div>
            </div>
          </article>
        </div>
      </main>
    </div>
    <?php
      include "inc/footer.inc.php"
    ?>
    <script src="js/fonction.js"></script>
	</body>
</html>