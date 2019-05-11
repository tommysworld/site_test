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
				  <input type="submit" value="Connexion" id="connexion"/>
				  <?php include("inc/connexion.inc.php");
		            if(!isset($_GET["submit"])){
					echo $_SESSION ['login']; }?>
				</form>
			</div>
		</header>
    <div class="responsive">
      <?php
        include "inc/menu.inc.php"
      ?>
      <article>
      <?php if(isset($_GET["submit"])){ ?>
        <h2>Les informations suivantes ont été envoyées:</h2>
        <?php  
          $nomPrenom = htmlentities($_GET ['nomPrenom']);
          $numPortable = htmlentities($_GET ['numPortable']);
          $sujetmessage = htmlentities($_GET ['typeDemande']);
          $message = htmlentities($_GET ['message']);
          $adresseMail = htmlentities($_GET ['adresseMail']);			
          setlocale(LC_TIME, 'fr_FR');
          date_default_timezone_set('Europe/Paris');
          $dateEnvoi = strftime('%Y-%m-%d %H:%M');
			
          //insertion des données récupérées dans le formulaire en base de données
          $requete = 'insert into message (usermessage, telephone, sujetmessage, message, email, datereceptionmessage) values ("'.$nomPrenom.'", "'.$numPortable.'", "'.$sujetmessage.'", "'.$message.'", "'.$adresseMail.'", "'.$dateEnvoi.'" )';
          $con->exec($requete);	
			
          //vérification que les données récupérées soient bien insérées dans la base de données
          $requeteverif = $con->prepare('select usermessage, telephone, sujetmessage, message, email, datereceptionmessage from message where usermessage= :nomPrenom and telephone= :numPortable and sujetmessage=:sujetmessage and message=:message and email=:adresseMail and datereceptionmessage=:dateEnvoi');
          $requeteverif->bindValue(':nomPrenom', $nomPrenom, PDO::PARAM_STR);
          $requeteverif->bindValue(':numPortable', $numPortable, PDO::PARAM_STR);
          $requeteverif->bindValue(':sujetmessage', $sujetmessage, PDO::PARAM_STR);
          $requeteverif->bindValue(':message', $message, PDO::PARAM_STR);
          $requeteverif->bindValue(':adresseMail', $adresseMail, PDO::PARAM_STR);
          $requeteverif->bindValue(':dateEnvoi', $dateEnvoi, PDO::PARAM_STR);
          $requeteverif->execute(); 
	        if ($requeteverif->fetch()) {			
        ?>
          <p class="message">
            Nom et prenom : 
            <?php //vérification des caractères spéciaux coté serveur au niveau du champ Nom, prénom	            
              $caracteres = "#^[{}%]+$#";
              if (strpbrk($nomPrenom, $caracteres)) {
                $tableau1 = array("{","}","%");
                $tableau2 = array("","","");
            ?>
            <p><?php echo $nomPrenom = str_replace($tableau1, $tableau2, $nomPrenom);?></p>
            <p><?php echo "Les caractères spéciaux {} % ont été supprimés de votre saisie";?></p>
            <?php
              }else
              {
                echo $nomPrenom;
              }
            ?>	
          </p>		
          <p class="message">
            Numero de portable : 
              <?php
                if($_GET['numPortable']!=NULL){
                  echo htmlspecialchars ($_GET['numPortable']);
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
              //vérification des caractères spéciaux coté serveur au niveau du champ message			
              if (strpbrk($message, $caracteres)) {
                $tableau1 = array("{","}","%");
                $tableau2 = array("","","");
            ?>
            <p><?php echo $message = str_replace($tableau1, $tableau2, $message);?></p>
            <p><?php echo "Les caractères spéciaux {} % ont été supprimés de votre saisie";?></p>
            <?php
              } else {
                echo $message;
              }
            ?>
          </p>
          <p class="message">
            Adresse mail : 
            <?php
              echo htmlentities ($_GET['adresseMail']);
            ?>
          </p>
          <p class="message">
            Date envoi :  
            <?php
              echo $dateEnvoi;
            ?>
          </p>
          <input class="retour" type="button" value="&larr; Retour" onclick="self.location.href='contact.php'"/>
        <?php
          } else {?>
            <p><?php echo "Un problème est survenu lors de l'envoi du message"; ?></p>
            <input class="retour" type="button" value="&larr; Retour" onclick="self.location.href='contact.php'"/>
        <?php }
          };
        ?>	                         			 
        <?php // Affichage de la liste des messages pour l'utilisateur admin
          if(!isset($_GET["submit"])){
            echo "<p>Liste des messages postés </p>";
  
            //nb de lignes contenu dans résultat
            echo "<table border='1'>\n";
            echo "<tr>\n";
            echo "<td><p>Nom, prénom de l'utilisateur</p></td>";
            echo "<td><p>Téléphone</p></td>";
            echo "<td><p>Sujet du message</p></td>";
            echo "<td><p>message</p></td>";
            echo "<td><p>Email</p></td>";
            echo "<td><p>Date de réception du message</p></td>";
            echo "</tr>\n";
  
            $requete = "select usermessage, telephone, sujetmessage, message, email, datereceptionmessage from message";			
            $resultat = $con->query($requete);
  
            while ($nbutilisateurs = $resultat->fetch()) {		
              echo "<tr>\n";
              echo "<td>".$nbutilisateurs['usermessage']. "</td>\n";
              echo "<td>".$nbutilisateurs['telephone']. "</td>\n";
              echo "<td>".$nbutilisateurs['sujetmessage']. "</td>\n";
              echo "<td>".$nbutilisateurs['message']. "</td>\n";
              echo "<td>".$nbutilisateurs['email']. "</td>\n";
              echo "<td>".$nbutilisateurs['datereceptionmessage']."</a>";
              echo "</tr>\n";
            }
            echo "</table>\n";		
        ?>
        <p class="bouton">
          <input class="retour" type="button" value="télécharger les messages sous le format csv" onclick="self.location.href='test.php'"/>	
          <input class="retour" type="button" value="Retour au backoffice" onclick="self.location.href='backoffice.php'"/>	
        </p>				
        <?php 
          }
        ?>		               
      </article>
    </div>
    <?php
      include "inc/footer.inc.php"
    ?>
		<script src="js/formulaire.js"></script>
    <script src="js/fonction.js"></script>
	</body>
</html>