<?php 
// # definiamo una comoda regexp per controllare la correttezza formale della mail
define("MAIL_REGEXP", "/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i");

// # Check campo nome
if(!isset($_POST["inputName"]) || empty($_POST["inputName"])) {
  echo "NAME_EMPTY";
  exit;
}

// # Check campo cognome
if(!isset($_POST["inputLastName"]) || empty($_POST["inputLastName"])) {
  echo "LAST_NAME_EMPTY";
  exit;
}

// # Controllo esistenza mail
if(!isset($_POST["inputEmail"]) || empty($_POST["inputEmail"])){
  echo "MAIL_EMPTY";
  exit;
}

// # Controllo correttezza mail
if( 0 === preg_match(MAIL_REGEXP, $_POST["inputEmail"])){
  echo "MAIL_INVALID";
  exit;
}

// # Check campo password
if(!isset($_POST["inputPassword"]) || empty($_POST["inputPassword"])) {
  echo "PASSWORD_EMPTY";
  exit;
}

// # Check campo ripeti password
if(!isset($_POST["inputPassword"]) || empty($_POST["inputRepeatPassword"])) {
  echo "PASSWORD_EMPTY";
  exit;
}

// # qui il codice per l'eventuale salvataggio nel DB

// # tutto ok, comunichiamolo al client
echo "OK";

 ?>