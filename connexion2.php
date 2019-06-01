<?php   session_start();
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
				<?php include "inc/logo.inc.php" ?>
				<h1 class="banniere">Tommy's World - Connexion administrateur</h1>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
				</form>
			</div>
		</header>
		<div class="responsive">
      <?php        include "inc/menu.inc.php"      ?>
      <article>
	    <?php        include("inc/connexion.inc.php");
        if(isset($_GET['connexionadm'])) { 		
          // on vérifie que le champ "Login" n'est pas vide
          if(empty($_GET['login'])) {?>
            <p><?php echo "Le champ login est vide."; ?></p>
        <?php           } else {
            // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
            if(empty($_GET['password'])) {?>
              <p><?php echo "Le champ Mot de passe est vide.";?></p>
          <?php            } else {
              if(empty($_GET['capcha'])) {?>
                <p><?php echo "Le champ capcha n'est pas rempli"; ?></p>
            <?php              } else {
                // Si les champs sont bien remplis, on sécurise les données entrées par l'administrateur:
                $login = htmlentities ($_GET['login']);
                $password = htmlentities ($_GET['password']);
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $requete = "SELECT * FROM user WHERE login = '".$login."' AND password = '".$password."'";	
                $resultat =	$con->prepare($requete);		
                $resultat = $con->query($requete);		
                if($connexion = $resultat->fetch()) {
                  $_SESSION['login']  = htmlentities ($_GET['login']);
                  $_SESSION['password']  = htmlentities ($_GET['password']);		    ?>
            <script type="text/javascript">
              window.location.href="backoffice.php";
            </script>
            <?php    } else {?>
            <p><?php echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé."; ?></p>
            <?php                }
              }
            }
          }
        }
      ?>
      <input class="retour" type="button" value="&larr; Revenir à la page de connexion" onclick="self.location.href='connexion.php'"/>	
		</article>
    </div>
    <?php      include "inc/footer.inc.php"    ?>
    <script src="js/formulaire.js"></script>
    <script src="js/fonction.js"></script>
	</body>
</html>