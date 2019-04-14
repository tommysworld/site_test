<!DOCTYPE html>

<html lang='fr'>
	<head>
		<meta charset="UTF-8"/>
		<title>Tommy's World - Message</title>
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
				<a href="index.html" class="logo"><img class="logo" src="img/logo-artiste.png" title="Retour à la page d'accueil" alt="Logo de l'artiste"/></a>
				<h1 class="banniere">Tommy's World, résultat du formulaire</h1>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
				</form>
			</div>
		</header>
    <div class="responsive">
      <nav class="menu">
        <ul class="menu">
          <li class="menu"><a href="noir-blanc.html" class="menu">Noir et blanc</a></li>
          <li class="menu"><a href="aquarelle.html" class="menu">Aquarelle</a></li>
          <li class="menu"><a href="flash.html" class="menu">Flash</a></li>
          <li class="menu"><a href="croquis.html" class="menu">Croquis</a></li>
          <li class="menu"><a href="contact.html" class="menu">Contact</a></li>
        </ul>
      </nav>
      <article>
        <h2>Message envoyé</h2>
        <p class="message">
          Nom et prenom : 
          <?php
            echo $_GET['nomPrenom'];
          ?>
        </p>
        <p class="message">
          Numero de portable : 
          <?php
            if($_GET['numPortable']!=NULL){
              echo $_GET['numPortable'];
            }else{
              echo "Non communiqué";
            }
          ?>
        </p>
        <p class="message">
          Type de message : 
          <?php
            echo $_GET['typeDemande'];
          ?>
        </p>
        <p class="message">
          Message : 
          <?php
            echo $_GET['message'];
          ?>
        </p>
        <p class="message">
          Adresse mail : 
          <?php
            echo $_GET['adresseMail'];
          ?>
        </p>
        <p class="message">
          Date envoi : 
          <?php
            echo $_GET['dateEnvoi'];
          ?>
        </p>
        <input class="retour" type="button" value="&larr; Retour" onclick="self.location.href='contact.html'">
      </article>
    </div>
		<footer>
			<p>Copyright Bourdain Loïc et Tommy - <a href="mention-legale.html">Mentions légales</a></p>
		</footer>
	</body>
</html>