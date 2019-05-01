<?php 
  // On ajoute un cookie d'une durée de 6 mois avec le mode httponly d'activé.
  setcookie('contact', 'contact', time() + 183*24*3600, null, null, false, true); 
?>

<!DOCTYPE html>

<html lang='fr'>
	<head>
		<meta charset="UTF-8"/>
		<title>Tommy's World - Contact</title>
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
				<h1 class="banniere">Tommy's World, page de contact</h1>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
				  <p>
		            <?php 
                      if (!isset($_COOKIE['contact'])) {
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
          <h2>Formulaire de contact</h2>
          <form action="message.php" id="contactForm" name="formulaire" onsubmit="return controlform();" method="GET">
            <p>
              <label for="nomPrenom">Nom et prénom * : </label>
              <input type="text" id="nomPrenom" name="nomPrenom" onblur="majuscule(this); changeBord(this); majuscule(this); testNomPrenom(this);" required>
            </p>
            <p id="error-nom-prenom" class="error"></p>
            <p>
              <label for="numPortable">Numéro de telephone : </label>
              <input type="text" id="numPortable" name="numPortable" onblur="espaceSupp(this); changeBord(this); testNumPortable(this);" onkeypress="espaceSupp(this); changeBord(this);" placeholder="0601020304">
            </p>
            <p id="error-num-portable" class="error"></p>
            <div class="liste">
              <p>
                <input type="radio" id="typeDemande" name="typeDemande" value="contact" checked> Demande de contact
              </p>
              <p>
                <input type="radio" id="typeDemande" name="typeDemande" value="information"> Demande d'information
              </p>
              <p>
                <input type="radio" id="typeDemande" name="typeDemande" value="suggestion"> Suggestion d'amélioration
              </p>
            </div>
            <p class="textarea">
              <label for="message">Message * : </label>
              <textarea id="message" name="message" rows=5 onblur="changeBord(this); testMessage(this);" onkeypress="changeBord(this);" placeholder="Message à saisir" required></textarea>
            </p>
            <p id="error-message" class="error"></p>
            <p>
              <label for="adresseMail">Adresse mail * : </label>
              <input type="text" id="adresseMail" name="adresseMail" onblur="changeBord(this);" onkeypress="changeBord(this);" placeholder="xyz@site.com" required>
            </p>
            <p id="error-adresse-mail" class="error"></p>
            <input type="hidden" id="dateEnvoi" name="dateEnvoi">
            <p class="warning">
            * : Doit obligatoirement être remplie
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
              <input id="reset" type="reset" value="Effacer" onclick="return resetForm();">
              <input id="submit" type="submit" name="submit" value="Envoyer">
            </p>
          </form>
          <h2>Informations utiles</h2>
          <section class="informations">
            <section>
              <p class="lien">
                Mon facebook : <a href="https://www.facebook.com/Tommys-World-1445491105697607/" target="_blank">Tommy's World</a>
              </p>
              <p class="lien">
                Mon instagram : <a href="https://www.instagram.com/tom_ily/" target="_blank">@tom_ily</a>
              </p>
              <p class="lien">
                Facebook du salon : <a href="https://www.facebook.com/pivoinetattoo/" target="_blank">Pivoine Art Tattoo</a>
              </p>
              <p class="lien">
                Adresse du salon : Pivoine Art Tattoo, 3 rue des Minimes, 45000 Orléans
              </p>
            </section>
            <div id="carte" class="map"></div>
          </section>
        </article>
      </main>
    </div>
		<footer>
			<p>Copyright Bourdain Loïc et Tommy - <a href="mention-legale.html">Mentions légales</a></p>
		</footer>
    <script src="js/formulaire.js"></script>
    <script src="js/fonction.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy0McvUlCnwFbzzzokeavKbZlN7JDXsFc&callback=initialiseMap"></script>
	</body>
</html>