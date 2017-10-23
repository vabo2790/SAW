<?php
  $con=mysqli_connect("localhost","S3942369","de2adc1d","S3942369");
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  //S:=Sentiero, U:=utente, M:=messaggi, P:=preferiti (utilizzo variabili inizializzate per altri campi), R:=Rating
  //inizializzo tutte la variabili
  //sentiero
  $idS=NULL;
  $nomeS=NULL;
  $regioneS=NULL;
  $provinciaS=NULL;
  $cittaS=NULL;
  $longS=NULL; //coordinate
  $latS=NULL;
  $indirizzoS=NULL;
  $difficoltaS=NULL;
  $descrizioneS=NULL;
  $statoS=NULL; //stato fisico del sentiero, se è in buono stato o se è da "ripulire"
  $fotoS=NULL;
  //user
  $usernameU=NULL;
  $mailU=NULL;
  $passwordU=NULL;
  $nomeU=NULL;
  $cognome=NULL;
  $fotoU=NULL;
  $cittaU=NULL;
  $sessoU=NULL;
  //messaggi
  $dataM=NULL;
  $testoM=NULL;
  //rating
  $commentoR=NULL;
  $stelleR=NULL;

  $query2="INSERT INTO user (mail, password, nome, cognome, username, città, sesso, foto)
  VALUES ($mailU, $passwordU, $nomeU, $cognomeU, $usernameU, $cittaU, $sessoU, $fotoU)";


?>
