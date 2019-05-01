

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
				<a href="index.php" class="logo"><img class="logo" src="img/logo-artiste.png" title="Retour à la page d'accueil" alt="Logo de l'artiste"/></a>
				<h1 class="banniere">Tommy's World - Connexion administrateur</h1>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
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
      <article>
        <h2>Connexion administrateur</h2>

        <form name="formulaire" action="connexion2.php" onsubmit="return controlformBackOffice();" method="GET">
          <p>*informations obligatoires</p>
          <p>
            <label for="login">*Login:</label>
            <input type="text" name="login" id="login" onblur="changebordBackOffice(this); testlogin(this);" required>
          </p>	
          <p id="error-login" class="error"></p>		  
 	        <p>
            <label for="password">*Mot de passe:</label>
            <input type="password" name="password" id="password" onblur="changebordBackOffice(this); testpassword(this);" required>
          </p>	
		  <p id="error-password" class="error"></p>
          <p>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" onblur="changebordBackOffice(this);">
          </p>	
           <div id="sectionCapcha" class="capcha">
              <p>Capcha : (Pour eviter les spams ainsi que les robots)</p>
              <p>
                <label id="labelCapcha" for="capcha"></label>
                <input type="text" id="capcha" name="capcha" onblur="testCapcha();" required>
              </p>
              <p>Exemple : 5 + 5, tu notes 10.</p>
              <p id="error-capcha" class="error"></p>
            </div>
          <p class="bouton">
            <input id="connexionadm" type="submit" name="connexionadm" value="Connexion">
            <input id="reset" type="reset" value="Effacer" onclick="return resetForm();">
          </p>
        </form>
      </article>
    </div>
		<footer>
			<p>Copyright Bourdain Loïc et Tommy - <a href="mention-legale.html">Mentions légales</a></p>
		</footer>
    <script src="js/formulaire.js"></script>
    <script src="js/fonction.js"></script>
	</body>
</html>