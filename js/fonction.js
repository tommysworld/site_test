var $display = false;

function displayResume(){
  if($display){
    document.getElementById("resume").style.display = "none";
    document.getElementById("boutonAffiche").value = "Afficher plan du site";
    $display=false;
  }else{
    document.getElementById("resume").style.display = "block";
    document.getElementById("boutonAffiche").value = "Masquer plan du site";
    $display=true;
  }
}

function largeurNav(){
  var $largeur;
  if(document.body){
    $largeur = document.body.clientWidth;
  }else{
    $largeur = window.innerWidth;
  }
  document.getElementById("largeurNavigateur").innerHTML="Taille du navigateur : "+$largeur+" px";
}

function dateFichier(){
  var $date = new Date(document.lastModified);
  var $annee = $date.getFullYear();
  var $mois = $date.getMonth()+1;
  if($mois<=9){
    $mois = "0"+$mois;
  }
  var $jour = $date.getDate();
  var $heure = $date.getHours();
  var $minute = $date.getMinutes();
  if($minute<=9){
    $minute = "0"+$minute;
  }
  document.getElementById("dateFichier").innerHTML="Fichier mis à jour : "+$jour+"/"+$mois+"/"+$annee+" "+$heure+":"+$minute;
}

function impressEcran(){
  window.print();
}