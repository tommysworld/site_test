<footer>
  <p>Copyright 
    <?php include("connexion.inc.php");
      $requete = "select nom, login from user where iduser > 1";			
      $resultat = $con->query($requete); 
        while ($footer = $resultat->fetch()) {		
          echo $footer['nom']; ?> 
          <?php echo $footer['login']; ?>, 
          <?php
			}
		  ?> 
    et Tommy - <a href="mention-legale.html">Mentions légales</a></p>
</footer>