var $testNom = true;
var $testNum = true;
var $testMess = true;
var $testAdresse = true;
var $testForm = true;
var $testCapcha = true;
var $resultCapcha = 0;

createCapcha();

function initialiseMap(){
  var $latlng = new google.maps.LatLng(47.902031, 1.902473);

  var $options = {
    center: $latlng,
    zoom: 19,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  
  var $carte = new google.maps.Map(document.getElementById("carte"), $options);
  var $marker = new google.maps.Marker({position: $latlng, map: $carte});
}

function controlform(){
  testNomPrenom();
  testNumPortable();
  testMessage();
  testAdresseMail();
  testCapcha();
  if(!$testNom || !$testNum || !$testMess || !$testAdresse || !$testCapcha){
    $testForm = false;
  }else{
    var $dateEnvoi = new Date();
    var $annee = $dateEnvoi.getFullYear();
    var $mois = $dateEnvoi.getMonth()+1;
    if($mois<=9){
      $mois = "0"+$mois;
    }
    var $jour = $dateEnvoi.getDate();
    var $heure = $dateEnvoi.getHours();
    var $minute = $dateEnvoi.getMinutes();
    if($minute<=9){
      $minute = "0"+$minute;
    }
    document.getElementById("dateEnvoi").value = $jour+"/"+$mois+"/"+$annee+" "+$heure+":"+$minute;
    $testForm = true;
  }
  return $testForm;
}

function changeBord($saisie){
  if($saisie.name=="nomPrenom"){
    if(!$testForm){
      if(testNomPrenom()){
        $saisie.style.borderColor = "#32CD32";
      }
    }
  }
  if($saisie.name=="numPortable"){
    if(!$testForm){
      if(testNumPortable()){
        $saisie.style.borderColor = "#32CD32";
      }
    }
  }
  if($saisie.name=="message"){
    if(!$testForm){
      if(testMessage()){
        $saisie.style.borderColor = "#32CD32";
      }
    }
  }
  if($saisie.name=="adresseMail"){
    if(!$testForm){
      if(testAdresseMail()){
        $saisie.style.borderColor = "#32CD32";
      }
    }
  }
}

function testNomPrenom(){
  if(document.getElementById("nomPrenom").value.match(/[0-9]/)){
		document.getElementById("error-nom-prenom").innerHTML = "Attention, pas de chiffres dans le nom ou le prénom";
    document.getElementById("nomPrenom").style.backgroundColor = "#FFB6C1";
    document.getElementById("nomPrenom").style.borderColor = "initial";
		$testNom = false;
	}else{
    document.getElementById("error-nom-prenom").innerHTML = "";
    document.getElementById("nomPrenom").style.backgroundColor = "white";
    $testNom = true;
  }
  return $testNom;
}

function testNumPortable(){
  if(document.getElementById("numPortable").value != null){
    if(document.getElementById("numPortable").value.match(/[a-zA-Z]/)){
      document.getElementById("error-num-portable").innerHTML = "Attention, pas de lettres dans le numéro";
      document.getElementById("numPortable").style.backgroundColor = "#FFB6C1";
      document.getElementById("numPortable").style.borderColor = "initial";
      $testNum = false;
      return $testNum;
    }else if(document.getElementById("numPortable").value.charAt(0)=="+"){
      if(document.getElementById("numPortable").value.length==12){
        document.getElementById("error-num-portable").innerHTML = "";
        document.getElementById("numPortable").style.backgroundColor = "white";
        $testNum=true;
        return $testNum;
      }else{
        document.getElementById("error-num-portable").innerHTML = "Attention, pas le bon nombre de chiffres";
        document.getElementById("numPortable").style.backgroundColor = "#FFB6C1";
        document.getElementById("numPortable").style.borderColor = "initial";
        $testNum = false;
        return $testNum;
      }
    }else if(document.getElementById("numPortable").value.charAt(0)=="0"){
      if(document.getElementById("numPortable").value.length==10){
        document.getElementById("error-num-portable").innerHTML = "";
        document.getElementById("numPortable").style.backgroundColor = "white";
        $testNum=true;
        return $testNum;
      }else{
        document.getElementById("error-num-portable").innerHTML = "Attention, pas le bon nombre de chiffres";
        document.getElementById("numPortable").style.backgroundColor = "#FFB6C1";
        document.getElementById("numPortable").style.borderColor = "initial";
        $testNum = false;
        return $testNum;
      }
    }
  }
}

function testMessage(){
  if(document.getElementById("message").value.match(/[{}%]/)){
    document.getElementById("error-message").innerHTML = "Attention, pas de caractéres spéciaux ( { } % )";
    document.getElementById("message").style.backgroundColor = "#FFB6C1";
    document.getElementById("message").style.borderColor = "initial";
    $testMess = false;
  }else{
    document.getElementById("error-message").innerHTML = "";
    document.getElementById("message").style.backgroundColor = "white";
    $testMess = true;
  }
  return $testMess;
}

function testAdresseMail(){
  if(!document.getElementById("adresseMail").value.match(/^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$/i)){
    document.getElementById("error-adresse-mail").innerHTML = "Attention, l'adresse mail n'est pas valide";
    document.getElementById("adresseMail").style.backgroundColor = "#FFB6C1";
    document.getElementById("adresseMail").style.borderColor = "initial";
    $testAdresse = false;
  }else{
    document.getElementById("error-adresse-mail").innerHTML = "";
    document.getElementById("adresseMail").style.backgroundColor = "white";
    $testAdresse = true;
  }
  return $testAdresse
}

function createCapcha(){
  if($testForm){
    var $nombre = createNumAleatoire(1,3);
    switch($nombre){
      case 1:
        $resultCapcha = 13;
        document.getElementById("labelCapcha").innerHTML = "12+1 =";
        break;
      case 2:
        $resultCapcha = 5;
        document.getElementById("labelCapcha").innerHTML = "2+3 = ";
        break;
      case 3:
        $resultCapcha = 24;
        document.getElementById("labelCapcha").innerHTML = "9+13 = ";
        break;
      default:
        break;
    }
  }else{
    document.getElementById("sectionCapcha").style.display = "none";
  }
}

function testCapcha(){
  if($resultCapcha==document.getElementById("capcha").value)
  {
    document.getElementById("submit").style.display = "block";
    document.getElementById("sectionCapcha").style.display = "none";
    $testCapcha = true;
  }else{
    document.getElementById("error-capcha").innerHTML = "Attention, le capcha n'est pas valide";
    document.getElementById("capcha").style.backgroundColor = "#FFB6C1";
    document.getElementById("capcha").style.borderColor = "initial";
    $testCapcha = false;
  }
  return $testCapcha;
}

function createNumAleatoire($min, $max)
{
  return Math.floor(Math.random() * ($max - $min + 1)) + $min;
}

function majuscule($saisie){
  $saisie.value = $saisie.value.toUpperCase();
}

function espaceSupp($saisie){
  var regex = /[\s]+/g;
  if($saisie.value != null){
    $saisie.value = $saisie.value.replace(regex,"");
  }
}

function resetForm(){
  return confirm('Voulez vous vraiment tout effacer ?');
}

function veriflogin(login) {
  var login="philippe";
  if (login.value==login) {
    console.log("Le login ["+login+"] est valide :)"); 
	return true;
  } else {
    console.log("E R R E U R  !\nLe login ["+login+"] n'est pas valide !!!!"); 
	alert('Le login n est pas valide');
	return false;
  }
}

function verifmotdepasse(motdepasse) {
  var motdepasse="Phil-2019";
  if (motdepasse.test(motdepasse)) {
    console.log("Le mot de passe ["+motdepasse+"] est valide :)"); 
	return true;
  } else {
    console.log("E R R E U R  !\nLe mot de passe ["+motdepasse+"] n'est pas valide !!!!"); 
	alert('Le mot de passe n est pas valide');
	return false;
  }
}
   