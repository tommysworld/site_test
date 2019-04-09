<?php session_start();
?>
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
	    <?php     include("inc/connexion.inc.php");	
          $page = 'backoffice.php';
          if(isset($_GET['connexionadm'])) { 
          // on vérifie que le champ "Login" n'est pas vide
          if(empty($_GET['login'])) {?>
            <p><?php echo "Le champ login est vide."; ?></p>
          <?php } else {
          // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
          if(empty($_GET['password'])) {
            echo "Le champ Mot de passe est vide.";
         } else {
			 if(empty($_GET['capcha'])) {
            echo "Le champ capcha n'est pas rempli";
         } else {
            // les champs sont bien GETé et pas vide, on sécurise les données entrées par le membre:
            $login = $_GET['login']; 
            $password = $_GET['password'];
            // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
            $requete = "SELECT * FROM user WHERE login = '".$login."' AND password = '".$password."'";		
            $resultat = $con->query($requete);
              if($connexion = $resultat->fetch()) {
                $_SESSION['login']  = $_GET['login'];
			    $_SESSION['password']  = $_GET['password'];
                echo '<script type="text/javascript">';
                echo 'window.location.href="'.$page.'";';
                echo '</script>';
                } else {
					echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                       }
                }
            }
            }
		  }
		  
        ?>
        <input class="retour" type="button" value="&larr; Revenir à la page de connexion" onclick="self.location.href='connexion.php'">	
		</article>
        
	</div>
		<footer>
			<p>Copyright Bourdain Loïc et Tommy - <a href="mention-legale.html">Mentions légales</a></p>
		</footer>
    <script src="js/formulaire.js"></script>
    <script src="js/fonction.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy0McvUlCnwFbzzzokeavKbZlN7JDXsFc&callback=initialiseMap"></script>
	</body>
</html>