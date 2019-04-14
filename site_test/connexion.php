

<!DOCTYPE html>

<html lang='fr'>
	<head>
		<meta charset="UTF-8"/>
		<title>Tommy's World - Connexion administrateur</title>
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
				<h1 class="banniere">Tommy's World - Connexion administrateur</h1>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
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
      <article>
        <h2>Connexion administrateur</h2>

        <form name="formulaire" action="connexion2.php" method="GET">
          <p>*informations obligatoires</p>
		    <div id="login">
              <label for="login">*Login:</label>
              <input type="text" name="login" onblur="changeBord(this)" required>
            </div>			  
 	        <div id="password">
              <label for="password">*Mot de passe:</label>
              <input type="password" name="password" onblur="changeBord(this)" required>
            </div>	
            <div id="nom">
              <label for="nom">Nom:</label>
              <input type="text" name="nom" onblur="changeBord(this);">
            </div>	
            <div id="sectionCapcha" class="capcha">
              <p>Capcha : (Pour eviter les spams ainsi que les robots)</p>
              <p>
              <label id="labelCapcha" for="capcha"></label>
              <input type="text" id="capcha" name="capcha" onblur="testCapcha(this);" onkeypress="testCapcha(this);">
              </p>
              <p>Exemple : 5 + 5, vous notez 10.</p>
             </div>
        </article>	
	    <p class="bouton">
	        <input id="connexionadm" type="submit" name="connexionadm" value="Connexion">
            <input id="reset" type="reset" value="Effacer" onclick="return resetForm();">
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