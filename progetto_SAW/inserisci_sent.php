<?php

$con=mysqli_connect("localhost","S3942369","de2adc1d","S3942369");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

require_once 'variabili.php';

if(isset($_POST['username'])){
  $usernameU=addslashes($_POST['username']);
}

if(isset($_POST['provincia'])){
  $provinciaS=addslashes($_POST['provincia']);
}

if(isset($_POST['regione'])){
  $regioneS=addslashes($_POST['regione']);
}

if(isset($_POST['nome'])){
  $nomeS=addslashes($_POST['nome']);
}

if(isset($_POST['stato_sentiero'])){
  $statoS=addslashes($_POST['stato_sentiero']);
}

if(isset($_POST['citta'])){
  $cittaS=addslashes($_POST['citta']);
}

if(isset($_POST['difficolta'])){
  $difficoltaS=addslashes($_POST['difficolta']);
}

if(isset($_POST['foto'])){
  $fotoS=addslashes($_POST['foto']);
}

if(isset($_POST['descrizione'])){
  $descrizioneS=addslashes($_POST['descrizione']);
}

$query3 = "INSERT INTO sentieri (regione, username, citta, provincia, longitudine, latitudine, indirizzo, stato_sentiero, difficolta, descrizione, foto, id, nome) VALUES ('$regioneS', '$usernameU', '$cittaS', '$provinciaS', '$longS', '$latS', '$indirizzoS', '$statoS', '$difficoltaS', '$descrizioneS', '$fotoS', '$idS', '$nomeS')";

//Inseriti i dati nel db stampo un messaggio di conferma che mi dica che il sentiero è stato inserito
//magari faccio il controllo con js
if (mysqli_query($con, $query3)) {
  echo "Nuovo sentiro inserito";
} else {
  echo "Controlla di aver inserito tutti i dati richiesti nei campi obbligatori";
}







 ?>
