<?php session_start();
?>	
<!DOCTYPE html>

<html lang='fr'>
	<head>
		<meta charset="UTF-8"/>
		<title>Tommy's World - Page de modification des articles</title>
		<link href="css/style.css" rel ="stylesheet" type="text/css" />
        <link href="css/placement.css" rel ="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel ="stylesheet" type="text/css" />
        <link href="css/image.css" rel ="stylesheet" type="text/css" />
	    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type='text/css'/>
		<link rel="icon" type="image/png" href="img/logo-artiste-favicon.png" />
		<meta name="viewport" content="width=device-width" />
        <meta name="description" content="Page de modification des articles pour le site de l'artiste tatoueur Tommy ainsi que son univers, de son world, sur Orléans et ses environs" />
	</head>
	<body>
		<header>
			<div class="banniere">
				<?php include "inc/logo.inc.php" ?>
				<h1 class="banniere">Tommy's World - Page de modification des articles</h1>
                <form action="deconnexionadm.php">
				  <input type="submit" value="Deconnexion" id="deconnexion">
				  <?php echo $_SESSION['login']; ?>
				</form>
			</div>
		</header>
		<div class="responsive">
          <?php
            include "inc/menu.inc.php"
          ?>
          <?php 
            include("inc/connexion.inc.php");
              if(!isset($_GET['nouvelarticle'])) {		
          ?>
          <article>
          <form name="formulaire" action="message2.php" method="GET">
          <p>*Article à modifier ou supprimer:</p>				
          <?php 
            $idarticle = htmlentities($_GET['idarticle']);
            $requete = $con->prepare ('select content.titre, content.categoriearticle, content.datemodificationarticle, content.contenuarticle, user.iduser from content inner join user on content.user_article = user.iduser where idarticle =:idarticle');	
            $requete->bindValue(':idarticle', $idarticle, PDO::PARAM_STR);	
            $requete->execute();			
            while ($nbutilisateurs = $requete->fetch()) { ?>

              <!--on affiche le résultat pour le visiteur-->		
              <table>				
                <tr>\
                  <td><p>Titre de l'article</p></td>
                  <td><input id="titre" type="text" name="titre" value="<?php echo "".$nbutilisateurs['titre'].""?>"/></td>
                </tr>
                <tr>
                  <td><p>Catégorie de l'article</p></td>
                  <td><input id="categoriearticle" type="text" name="categoriearticle" value="<?php echo "".$nbutilisateurs['categoriearticle'].""?>"/></td>		
                </tr>
                <tr>					  
                  <td><p>Contenu de l'article</p></td>
                  <td><input id="contenuarticle" name="contenuarticle" value="<?php echo "".$nbutilisateurs['contenuarticle'].""?>"/></td>
                </tr>
                <tr>
                  <td><p>Date de la dernière modification de l'article</p></td>
                  <td><?php echo "".$nbutilisateurs['datemodificationarticle'].""?></td>
				</tr>
                <tr>
                  <td><p>Login de la personne connectée</p></td>
                  <td><?php echo "".htmlentities($_SESSION['login']).""?></td>
                </tr>
              </table>					  					  					  
              <input type="hidden" name="idarticle" value="<?php echo "".$_GET ['idarticle'].""?>">
              <p class="bouton">
                <input type="submit" value="Modifier" name="modifier" id="modifier" onclick="return modifyarticle();"/>
                <input type="submit" value="Supprimer" name="supprimer" id="supprimer" onclick="return deletearticle();"/>		                
              </p>	
              <input id="retour2" class="retour" type="button" value="&larr; Retour à la page de modification des articles" onclick="self.location.href='backoffice.php'"/>					  
            </form>
          </article>
        <?php
          }
        }
        ?>						  
      <?php				
        if(isset($_GET['nouvelarticle'])) {
      ?>
      <article>					    
        <form id="ajoutarticle" name="ajoutarticle" method="GET" action="message2">			
          <p>Nouvel article</p>					  
            <!--on affiche le résultat pour le visiteur-->	
			
            <table>			
              <tr>;
                <td><p>Titre de l'article</p></td>
                <td><input id="titre" type="text" name="titre" value=""></td>
              </tr>
              <tr>
                <td><p>Catégorie de l'article</p></td>
                <td>
			      <SELECT id="categoriearticle" name="categoriearticle">
                    <OPTION>noir et blanc
                    <OPTION>flash
                    <OPTION>croquis
                    <OPTION>aquarelle
                  </SELECT>
			    </td>
              </tr>
              <tr>
                <td><p>Contenu de l'article</p></td>
                <td><textarea id="contenuarticle" name="contenuarticle" value=""></textarea></td>							  							  
              </tr>				  			    										   											   
            </table>	
          <p class="bouton">
            <input type="submit" value="Ajouter" name="ajouter" id="ajouter" onclick="return insertarticle();"/>
            <input id="retour" class="retour" type="button" value="&larr; Retour à la page de modification des articles" onclick="self.location.href='backoffice.php'"/>
          </p>
        </form>
      </article>
      <?php											   											   
        }
      ?>							  						  				            				          
    <?php
      include "inc/footer.inc.php"
    ?>
    <script src="js/formulaire.js"></script>
    <script src="js/fonction.js"></script>
	</body>
</html>