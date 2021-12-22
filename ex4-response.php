<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Esercizio 4</title>
</head>
<body>
  <?php

    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errore = "";

    if(empty(trim($nome))){ $errore .= "non hai inserito il nome ";} 
    if(empty(trim($cognome))){ $errore .= "non hai inserito il cognome ";}
    if(empty(trim($email))){ $errore .= "non hai inserito l'email ";}
    if(empty(trim($password))){ $errore .= "non hai inserito la password ";}

    if($errore !="") {
      echo $errore . ", torna indietro ed inserisci i campi richiesti";
    }
    else {
      echo "Benvenuto" . $_POST["nome"] . " " . $_POST["cognome"]; ?> <br> <?php
      echo "Il tuo indirizzo e-mail è: " . $_POST["email"]; 
    }
  ?>
    
</body>
</html>