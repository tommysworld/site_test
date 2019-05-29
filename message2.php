<?php session_start();
?>
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
				<?php include "inc/logo.inc.php" ?>
				<h1 class="banniere">Tommy's World, résultat du formulaire</h1>
				<form action="connexion.php">
				  <input type="submit" value="Connexion" id="connexion">
				</form>
			</div>
		</header>
    <div class="responsive">
      <?php
        include "inc/menu.inc.php"
      ?>
      <article>
      <?php include("inc/connexion.inc.php");
		  setlocale(LC_TIME, 'fr_FR');
		  date_default_timezone_set('Europe/Paris');
		  $date = strftime('%Y-%m-%d %H:%M');		
	      if(isset($_GET["modifier"])){
			$requete1 = "SELECT iduser FROM user WHERE login = '".$_SESSION['login']."' AND password = '".$_SESSION['password']."'";	
            $resultat =	$con->prepare($requete1);		
            $resultat = $con->query($requete1);		
              if($iduser = $resultat->fetch()) {
		        $requete ='update content set titre ="'.$_GET ['titre'].'", categoriearticle ="'.$_GET ['categoriearticle'].'", contenuarticle ="'.$_GET ['contenuarticle'].'", datemodificationarticle="'.$date.'", nomusermodificationarticle="'.$_SESSION['login'].'", user_article="'.$iduser['iduser'].'" where idarticle ="'.$_GET ['idarticle'].'"';
		        $con->prepare($requete);
			    $con->exec($requete);
		        echo "Les modifications ont bien été prises en compte";};
	          if(isset($_GET["supprimer"])){
		        $requete = 'delete from content where idarticle ="'.$_GET ['idarticle'].'"';
			    $con->prepare($requete);
		        $con->exec($requete);
		        echo "La suppression a bien été prise en compte";
		  }};
	  ?>
			
      <?php
		if(isset($_GET["ajouter"])){
	      $requete1 = "SELECT iduser FROM user WHERE login = '".$_SESSION['login']."' AND password = '".$_SESSION['password']."'";	
          $resultat =	$con->prepare($requete1);		
          $resultat = $con->query($requete1);		
          $titre = $_GET ['titre'];
	      $categoriearticle = $_GET ['categoriearticle'];
	      $contenuarticle = $_GET ['contenuarticle'];
		  $login = $_SESSION ['login'];
		  if($iduser = $resultat->fetch()) {
		    $requete = 'insert into content (titre, categoriearticle, contenuarticle, nomusermodificationarticle, datemodificationarticle, user_article) values ("'.$titre.'", "'.$categoriearticle.'", "'.$contenuarticle.'", "'.$login.'", "'.$date.'", "'.$iduser['iduser'].'")';
		    $con->prepare($requete);
			$con->exec($requete);
		    echo "L'article a bien été ajouté";
		  }};			
		?>
      </article>
      <input class="retour" type="button" value="&larr; Retour à la page de modification des articles" onclick="self.location.href='backoffice.php'">
    </div>
    <?php
      include "inc/footer.inc.php"
    ?>
	</body>
</html>